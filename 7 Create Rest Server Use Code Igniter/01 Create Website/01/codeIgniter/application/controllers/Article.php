<?php  

	class Article extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Article_model');
		}

		public function index() {
			$data['title'] = 'Article Collection';
			$data['article2'] = $this->Article_model->getAllArticle();

			$this->load->view('templates/header', $data);
			$this->load->view('article/index');
			$this->load->view('templates/footer');
		}
	}

?>