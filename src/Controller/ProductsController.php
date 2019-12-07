<?php
namespace App\Controller;

use App\Controller\AppController;

class ProductsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Cart');
    }

    public function sitemap()
    {
        $products = $this->Products->find('all', [
            'order' => [
                'Products.name' => 'ASC'
            ],
            'fields' => [
                'Products.slug',
				'Products.modified'
            ],
            'conditions' => [
                'Products.is_active' => 1,
            ]
        ]);
        $this->set(compact('products'));

        $this->response->type('xml');
        $this->viewBuilder()->layout(false);
    }

    public function index()
    {
		$conditions = array();
		$cat_name = 'Products';
		if ($this->request->query('cat_id')) {
			$conditions['Products.category_id'] = $this->request->query('cat_id');
			$cat_name = $this->request->query('cat_name');
		}
		$conditions['Products.is_active'] = 1;
        $this->paginate = [
            'contain' => ['Categories', 'Attachments'],
            'order' => [
                'Products.name' => 'ASC',
            ],
            'conditions' => $conditions,
            'limit' => 21
        ];
		$products = $this->paginate($this->Products);
		$this->set(compact('products','cat_name'));
    }
	
	public function home()
    {
		$productBanners = $this->Products->find('all', [
            'contain' => ['Attachments'],
            'conditions' => [
                'Products.is_home' => 1,
                'Products.is_active' => 1,
            ]
        ]);
		$productOffers = $this->Products->find('all', [
            'contain' => ['Categories', 'Attachments'],
            'order' => [
                'Products.created' => 'ASC',
            ],
            'conditions' => [
                'Products.is_active' => 1,
				'Products.offer_date >=' => date('Y-m-d').' 00:00:00'
            ]
        ]);
		$products = $this->Products->find('all', [
            'contain' => ['Categories', 'Attachments'],
            'order' => [
                'Products.created' => 'ASC',
            ],
            'conditions' => [
                'Products.is_active' => 1
            ],
            'limit' => 12
        ]);
		$title_for_layout = 'B & C Techno Solutions';
		$description = 'Manufacturer of Centrifugal Pump - CNX Chemical Centrifugal Pump, CNX Centrifugal Process Pump, Chemical Centrifugal Pump and Single Stage Centrifugal Pump offered by B & C Techno Solutions, Chennai, Tamil Nadu.';
		$keywords = 'Centrifugal Pump, CNX Chemical Centrifugal Pump, CNX Centrifugal Process Pump, Chemical Centrifugal Pump, Single Stage Centrifugal Pump, Chemical Dosing Centrifugal Pump';
		$this->set(compact('products','productBanners', 'productOffers','title_for_layout', 'description', 'keywords'));
    }

    public function view($slug = null)
    {
        $product = $this->Products->find('all', [
            'contain' => ['Categories', 'Attachments'],
            'conditions' => [
                'Products.slug' => $slug,
                'Products.is_active' => 1,
            ]
        ])->first();
        if(empty($product)) {
            return $this->redirect(['action' => 'index']);
        }
		$title_for_layout = $product->title;
		$description = $product->meta_description;
		$keywords = $product->keyword;
		$this->set(compact('product','title_for_layout', 'description', 'keywords'));
    }

    public function cart()
    {
        $shop = $this->Cart->getcart();
        $this->set(compact('shop'));
    }

    public function cartupdate() {
        if ($this->request->is('post')) {
            foreach($this->request->data as $key => $value) {
                $a = explode('-', $key);
                $b = explode('_', $a[1]);
                $this->Cart->add($b[0], $value, $b[1]);
                $this->Cart->cart();
            }
        }
        return $this->redirect(['action' => 'cart']);
    }

////////////////////////////////////////////////////////////////////////////////

    public function itemupdate() {
        if ($this->request->is('ajax')) {
            $id = $this->request->data['id'];
            $quantity = isset($this->request->data['quantity']) ? $this->request->data['quantity'] : 1;
            if(isset($this->request->data['mods']) && ($this->request->data['mods'] > 0)) {
                $productmodId = $this->request->data['mods'];
            } else {
                $productmodId = 0;
            }
            $product = $this->Cart->add($id, $quantity, $productmodId);
        }
        $cart = $this->Cart->getcart();
        echo json_encode($cart);
        die;
    }

////////////////////////////////////////////////////////////////////////////////

    public function clear()
    {
        $this->Cart->clear();
        $this->Flash->success('The shopping cart is cleared');
        return $this->redirect(['action' => 'index']);
    }

////////////////////////////////////////////////////////////////////////////////

}
