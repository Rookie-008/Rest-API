<?php  
	
	use GuzzleHttp\Client;

	class Article_model extends CI_model {

		private $_client;

		public function __construct() {
			$this->_client = new Client([
				'base_uri' => 'http://localhost/restApi/clientServer/restClient/article/',
				'auth' => ['user', 'abc5735']
			]);
		}

		public function getAllArticle() {
			// return $this->db->get('article2')->result_array();
			// return $query->result_array();

			$responce = $this-> _client->request('GET', 'article', [
				'query' => [
					'NEW-API-KEY' => 'abc12345'
				]
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}

		public function getArticleById($id) {
			// return $this->db->get_where('article2', ['id' => $id])->row();
			// return $this->db->get_where('article2', ['id' => $id])->row_array();

			$responce = $this->_client->request('GET', 'article', [
				'query' => [
					'NEW-API-KEY' => 'abc12345',
					'id' => $id
				]
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'][0];
			
		}


		public function addDataArticle() {
			$data = [

				"articleTitle" => $this->input->post('articleTitle', true),
				"dataArticle" => $this->input->post('dataArticle', true),
				"releaseNumber" => $this->input->post('releaseNumber', true),
				"email" => $this->input->post('email', true),
				"genre" => $this->input->post('genre', true),
				"NEW-API-KEY" => 'abc12345'

			];

			$response = $this->_client->request('POST','article', [
				'form_params' => $data
			]);

			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		}


		public function deleteDataArticle($id) {
			$responce = $this->_client->request('DELETE', 'article' [
				'form_params' => [
					'id' => $id,
					'NEW-API-KEY' => 'abc12345'
				]
			]);


			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		}

		

		public function changeDataArticle() {
			$data = [

				"articleTitle" => $this->input->post('articleTitle', true),
				"dataArticle" => $this->input->post('dataArticle', true),
				"releaseNumber" => $this->input->post('releaseNumber', true),
				"email" => $this->input->post('email', true),
				"genre" => $this->input->post('genre', true),
				"id" => $this->input->post('id', true),
				"NEW-API-KEY" => "abc12345"


			];

			$response = $this->_client->request('PUT','article', [
				'form_params' => $data
			]);

			$result = json_decode($response->getBody()->getContents(), true);
			return $result;
		}

		public function searchDataArticle() {
			$keyword = $this->input->post('keyword', true);
			$this->db->like('articleTitle', $keyword);
			$this->db->or_like('genre', $keyword);
			$this->db->or_like('releaseNumber', $keyword);
			
			return $this->db->get('article2')->result_array();
		}
	}


?>