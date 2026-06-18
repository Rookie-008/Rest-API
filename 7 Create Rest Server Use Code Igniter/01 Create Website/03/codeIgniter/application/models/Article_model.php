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

			// $this->db->delete('article2', ['id' => $id]);
		}

		public function getArticleById($id) {
			// return $this->db->get_where('article2', ['id' => $id])->row();
			return $this->db->get_where('article2', ['id' => $id])->row_array();
		}

		public function changeDataArticle() {
			$data = [

				"articleTitle" => $this->input->post('articleTitle', true),
				"dataArticle" => $this->input->post('dataArticle', true),
				"releaseNumber" => $this->input->post('releaseNumber', true),
				"email" => $this->input->post('email', true),
				"genre" => $this->input->post('genre', true)

			];

			$this->db->where('article2', $this->input->post('id'));
			$this->db->update('article2', $data);
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