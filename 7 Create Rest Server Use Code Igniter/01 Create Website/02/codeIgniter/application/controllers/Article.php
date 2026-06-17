<?php  

	class Article extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Article_model');
			$this->load->library('form_validation');
		}

		public function index() {
			$data['title'] = 'Article Collection';
			$data['article2'] = $this->Article_model->getAllArticle();

			$this->load->view('templates/header', $data);
			$this->load->view('article/index');
			$this->load->view('templates/footer');
		}

		public function add() {
			$data['title'] = 'Form Add Data Article';

			$this->form_validation->set_rules('articleTitle', 'Title Article', 'required');
			$this->form_validation->set_rules('dataArticle', 'Data Article', 'required');
			$this->form_validation->set_rules('releaseNumber', 'Release Number', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('article/add');
				$this->load->view('templates/footer');
			} else {
				$this->Article_model->addDataArticle();
				redirect('article');
			}


		}

		public function delete($id) {
			$this->Article_model->deleteDataArticle($id);
			$this->session->set_flashdata('flash', 'deleting');
			redirect('article');
		}

	}

?>