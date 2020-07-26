<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class ProductsController extends AppController
{

    public function index()
    {
		$this->paginate = [
            'contain' => ['Categories'],
			'conditions' => $conditions,
            'order' => [
                'Products.id' => 'DESC'
            ],
            'limit' => 150
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);

        $categories1 = $this->Products->Categories->find('list', [
            'order' => [
                'Categories.name' => 'ASC',
            ]
        ])->toArray();
        foreach ($categories1 as $key => $value) {
            $categories[] = [
                'value' => $key,
                'text' => $value,
            ];
        }
        $this->set(compact('categories'));

    }

    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories', 'Productoptions']
        ]);

        $this->set(compact('product'));
        $this->set('_serialize', ['product']);
    }

    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
			if (isset($this->request->data['offer_price']) && $this->request->data['offer_price'] == '') {
				$this->request->data['offer_date'] = '';
			}
			$this->request->data['title'] = $this->request->data['name'];
			$this->request->data['slug'] = $this->clean($this->request->data['name']);
			$query = $this->Products->find();
			$query->where(['slug' => $this->request->data['slug']])->select(['count' => $query->func()->count('*')]);
			if ($query) {
				$productsCount = $query->toArray();
				$this->request->data['slug'] = ($productsCount[0]->count != 0) ? $this->request->data['slug'].'-'.($productsCount[0]->count+1): $this->request->data['slug'];
			}
			$attachments = $this->request->data['Attachments'];
			unset($this->request->data['Attachments']);
			$product = $this->Products->patchEntity($product, $this->request->data);
			$result = $this->Products->save($product);
			if ($result) {
				if (!empty($attachments) && $attachments[0]['tmp_name'] != '') {
					$this->insertAttachment($attachments, $result->id);
				}
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
				if ($product->getErrors()) {
					$error_msg = [];
					foreach( $product->getErrors() as $key1 => $value1) {
						if (is_array($value1)) {
							foreach($value1 as $key => $value) {
								$error_msg[] = $value.' '.$key1;
							}
						} else {
							$error_msg[] = $value1;
						}
					}

					if (!empty($error_msg)) {
						$this->Flash->error(
							__("Please fix the following error(s):".implode("\n \r", $error_msg))
						);
					}
				}
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories'));
        $this->set('_serialize', ['product']);
    }
	
	public function clean($string) {
	   $string = str_replace(' ', '-', $string);
	   return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $string));
	}
	
	public function insertAttachment($attachments, $id)
    {
		if ($attachments) {
			foreach ($attachments as $attachment) {
				$attachmentEntity = $this->Products->Attachments->newEntity();
				$attachment['foreign_id'] = $id;
				$attachment['Attachments']['name'] = $attachment['name'];
				$attachment['Attachments']['class'] = 'Product';
				$this->upload_file($attachment, $id);
				$attachmentSave = $this->Products->Attachments->patchEntity($attachmentEntity, $attachment);
				$this->Products->Attachments->save($attachmentSave);
			}
		}
    }

    public function edit($id = null)
    {
        $product = $this->Products->get($id, ['contain' => ['Attachments']]);
        if ($this->request->is(['patch', 'post', 'put'])) {
			if ($product->name != $this->request->data['name']) {
				$this->request->data['title'] = $this->request->data['name'];
				$this->request->data['slug'] = $this->clean($this->request->data['name']);
				$query = $this->Products->find();
				$query->where(['slug' => $this->request->data['slug']])->select(['count' => $query->func()->count('*')]);
				if ($query) {
					$productsCount = $query->toArray();
					$this->request->data['slug'] = ($productsCount[0]->count != 0) ? $this->request->data['slug'].'-'.($productesCount[0]->count+1): $this->request->data['slug'];
				}
			}
			if (isset($this->request->data['offer_price']) && $this->request->data['offer_price'] == '') {
				$this->request->data['offer_date'] = '';
			}
			$offer_date = $this->request->data['offer_date'];
			$this->request->data['offer_date'] = $offer_date['year'].'-'.$offer_date['month'].'-'.$offer_date['day'];
			$attachments = $this->request->data['Attachments'];
			unset($this->request->data['Attachments']);
            $product = $this->Products->patchEntity($product, $this->request->data);
			if ($this->Products->save($product)) {
				if (!empty($attachments) && $attachments[0]['tmp_name'] != '') {
					$this->insertAttachment($attachments, $id);
				}
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
		$categories = $this->Products->Categories->find('list', ['limit' => 200]);
		$this->set(compact('product', 'categories'));
        $this->set('_serialize', ['product']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
	
	public function delete_attachment($id = null)
    {
		$this->autoRender = false;
        $this->request->allowMethod(['post', 'delete', 'get']);
        $attachment = $this->Products->Attachments->get($id);
        if ($this->Products->Attachments->delete($attachment)) {
			echo 'The Attachments has been deleted.';
        } else {
            echo 'The Attachments could not be deleted. Please, try again.';
        }
    }
	
	public function upload_file($attachments, $id)
    {
		$tmpFilePath = $attachments['tmp_name'];
		if ($tmpFilePath != "") {
			$shortname = $attachments['name'];
			$uploadPath = ROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'Products'.DIRECTORY_SEPARATOR.$id;
			if (!file_exists($uploadPath)) {
				mkdir($uploadPath, 0777, true);
			}
			$filePath = $uploadPath.DIRECTORY_SEPARATOR.$attachments['name'];
			move_uploaded_file($tmpFilePath, $filePath);
		}
	}

}
