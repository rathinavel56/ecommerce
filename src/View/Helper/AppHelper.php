<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;

class AppHelper extends Helper {
	
	public function siteUrl() {
		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://".$_SERVER['HTTP_HOST'] : "http://".$_SERVER['HTTP_HOST'];
	}
	
	public function getCategory() {
		$this->Categories = TableRegistry::get('Categories');
		$categories = $this->Categories
								->find('list', [
									'keyField' => 'id',
									'valueField' => 'name'
								])->toArray();
		return $categories;
	}
	
    public function imageResize($newWidth, $class, $originalFile) {
        $mediaPath = ROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.$class.DIRECTORY_SEPARATOR.$originalFile->foreign_id.DIRECTORY_SEPARATOR.$originalFile->name;
		$imgPath = ROOT.DIRECTORY_SEPARATOR.'webroot'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$class.DIRECTORY_SEPARATOR.$newWidth.DIRECTORY_SEPARATOR.$originalFile->foreign_id;
		$imgFile = $imgPath.DIRECTORY_SEPARATOR.$originalFile->id.'-'.$originalFile->name;
		$imgUrl = $this->siteUrl().'/images/'.$class.'/'.$newWidth.'/'.$originalFile->foreign_id.'/'.$originalFile->id.'-'.$originalFile->name;
		$wmsource = ROOT.DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'WaterMark'.DIRECTORY_SEPARATOR.'WaterMark.png';
		if (!file_exists($imgPath)) {
			mkdir($imgPath, 0777, true);
		} else if (file_exists($imgFile)){
			return $imgUrl;
		}
		$info = getimagesize($mediaPath);
		$newWidth = ($newWidth == 'original') ? $info[0] : $newWidth;
		$mime = $info['mime'];
		switch ($mime) {
				case 'image/jpeg':
						$image_create_func = 'imagecreatefromjpeg';
						$image_save_func = 'imagejpeg';
						$new_image_ext = 'jpg';
						break;

				case 'image/png':
						$image_create_func = 'imagecreatefrompng';
						$image_save_func = 'imagepng';
						$new_image_ext = 'png';
						break;

				case 'image/gif':
						$image_create_func = 'imagecreatefromgif';
						$image_save_func = 'imagegif';
						$new_image_ext = 'gif';
						break;

				default: 
						return $this->siteUrl().'/images/no_image.png';
		}

		$img = $image_create_func($mediaPath);
		list($width, $height) = getimagesize($mediaPath);
		$newHeight = ($height / $width) * $newWidth;
		$tmp = imagecreatetruecolor($newWidth, $newHeight);
		imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		$image_save_func($tmp, "$imgFile");
		return $imgUrl;
		/*$info = getimagesize($wmsource);
		$mime = $info['mime'];
		switch ($mime) {
				case 'image/jpeg':
						$watermark = imagecreatefromjpeg($wmsource);
						break;

				case 'image/png':
						$watermark = imagecreatefrompng($wmsource);
						break;

				case 'image/gif':
						$watermark = imagecreatefromgif($wmsource);
						break;

				default: 
						return $this->siteUrl().'/images/no_image.png';
		}
		$wm_w = imagesx($watermark);
		$wm_h = imagesy($watermark);
		$wm_x = $newWidth - $wm_w;
		$wm_y = $newHeight - $wm_h;
		imagecopy($tmp, $watermark, $wm_x, $wm_y, 0, 0, $newWidth, $newHeight);
		$image_save_func($tmp, "$imgFile");
		return $imgUrl;*/
	}

}