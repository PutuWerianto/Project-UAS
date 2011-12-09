<?php
class Mgallery extends Model {
	
	var $gallery_path;
	var $gallery_path_url;
	
	function Mgallery() {
		parent::Model();
		
		$this->gallery_path = realpath(index_page()).'\images';
		$this->gallery_path_url = base_url().'images/';
	}
	
	function get_images() {
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', '/'));
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . '/' . $file
			);
		}
		return $images;
	}
}
?>