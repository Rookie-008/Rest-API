<?php  

	class Novel_model extends CI_Model {

		public function getNovel($id = null) {

			if( $id === null ) {
				return $this->db->get('novel')->result_array();
			} else {
				return $this->db->get_where('novel', ['id' => $id])->result_array();
			}
		}

		public function deleteNovel($id) {
			$this->db->delete('novel', ['id' => $id]);
			return $this->db->affected_rows();
		}

		public function createNovel($data) {
			$this->db->insert('novel', $data);
			return $this->db->affected_rows();
		}

		public function updateNovel($data, $id) {
			$this->db->update('novel', $data, ['id' => $id]);
			return $this->db->affected_rows();
		}

	}

?>