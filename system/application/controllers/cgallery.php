<?php
class Cgallery extends Controller {

	function index() {
		$this->load->model('mgallery');
		$data['images'] = $this->mgallery->get_images();
		$this->load->view('vgallery', $data);
	}
}
?>