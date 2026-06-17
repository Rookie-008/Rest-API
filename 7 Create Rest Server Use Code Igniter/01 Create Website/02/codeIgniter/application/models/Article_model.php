<?php  

	class Article_model extends CI_model {
		public function getAllArticle() {
			// $query = $this->database->get('article2');
			// return $query->result_array();

			return $this->database->get('article2')->result_array();
		}

		public function addDataArticle() {
			$data = [

				"articleTitle" => $this->input->post('articleTitle', true),
				"dataArticle" => $this->input->post('dataArticle', true),
				"releaseNumber" => $this->input->post('releaseNumber', true),
				"email" => $this->input->post('email', true),
				"genre" => $this->input->post('genre', true)

			];

			$this->db->insert('article2', $data);
		}

		public function deleteDataArticle($id) {
			$this->db->where('id', $id);
			$this->db->delete('article2');
		}
	}

?>