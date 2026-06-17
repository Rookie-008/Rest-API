<?php  

	class Article_model extends CI_model {
		public function getAllArticle() {
			// $query = $this->database->get('article2');
			// return $query->result_array();

			return $this->database->get('article2')->result_array();
		}
	}

?>