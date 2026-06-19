<?php  
	
	use Restserver\Libraries\REST_Controller;
	defined('BASEPATH') OR exit('No direct script access allowed');

	require APPPATH . 'libraries/REST_Controller.php';
	require APPPATH . 'libraries/Format.php';


	class Novel extends REST_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('Novel_model', 'NOVEL');
		}

		public function index_get() {
			$id = $this->get('id');
			if ($id === null) {
				$novel = $this->NOVEL->getNovel();
				// var_dump($novel);
			} else {
				$novel = $this->NOVEL->getNovel($id);
			}

			if( $novel ) {
				$this->response([
					'status' => TRUE,
					'data' => $novel
				], REST_Controller::HTTP_OK);
			} else {
				$this->response([
					'status' => FALSE,
					'message' => 'ID NOT FOUND!'
				], REST_Controller::HTTP_NOT_FOUND);
			}

		}

		public function index_delete() {
			$id = $this->delete('id');

			if( $id === null ) {
				$this->response([
					'status' => FALSE,
					'message' => 'WRITE AN ID!'
				], REST_Controller::HTTP_BAD_REQUEST);
			} else {
				if( $this->novel->deleteNovel($id) > 0 ) {
					// OK
					$this->response([
						'status' => TRUE,
						'id' => $id,
						'message' => 'Deleted.'
					], REST_Controller::HTTP_NO_CONTENT);
				} else {
					// ID NOT FOUND
					$this->response([
						'status' => FALSE,
						'message' => 'ID NOT FOUND!'
					], REST_Controller::HTTP_BAD_REQUEST);
				}
			}

		public function index_post() {
			$data = [
				'releaseNumber' => $this->post('releaseNumber'),
				'novelTitle' => $this->post('novelTitle'),
				'dataNovel' => $this->post('dataNovel'),
				'email' => $this->post('email'),
				'genre' => $this->post('genre'),
			];

			if( $this->novel->createNovel($data) > 0 ) {
				// OK
				$this->response([
					'status' => TRUE,
					'message' => 'NEW NOVEL HAS BEEN CREATED!'
				], REST_Controller::HTTP_CREATED);
			} else {
				$this->response([
					'status' => FALSE,
					'message' => 'FAILED TO CREATED DATA NOVEL'
				], REST_Controller::HTTP_BAD_REQUEST);
			}
		}

		public function index_put() {

			$id = $this->put('id');

			$data = [
				'releaseNumber' => $this->put('releaseNumber'),
				'novelTitle' => $this->put('novelTitle'),
				'dataNovel' => $this->put('dataNovel'),
				'email' => $this->put('email'),
				'genre' => $this->put('genre')
			];

			if( $this->novel->updateNovel($data, $id) > 0 ) {
				// OK
				$this->response([
					'status' => TRUE,
					'message' => 'DATA NOVEL HAS BEEN UPDATED!'
				], REST_Controller::HTTP_NO_CONTENT);
			} else {
				$this->response([
					'status' => FALSE,
					'message' => 'FAILED TO UPDATED DATA NOVEL'
				], REST_Controller::HTTP_BAD_REQUEST);
			}
		}
	}

?>