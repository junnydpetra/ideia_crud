<?php

class Atividades_model extends CI_Model
{
	 
	public function index()
	 {
		return $this->db->get("atividade")->result_array();
	 }
	 
	 public function cadastro($atividade)
	 {
		return $this->db->insert("atividade", $atividade);
	 }

	 public function edicao($id)
	 {
		return $this->db->get_where("atividade", array(
			"id" => $id
		))->row_array();
	 }

	 public function update($id, $atividade)
	 {
		$this->db->where("id", $id);
		return $this->db->update("atividade", $atividade);
	 }

	 public function destroy($id)
	 {
		$this->db->where("id", $id);
		return $this->db->delete("atividade");
	 }
}
