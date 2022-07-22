<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atividades extends CI_Controller {
 
	public function index()
	{
		$this->load->model("atividades_model");
		
		$dados["atividades"] = $this->atividades_model->index();
		$dados["title"] = "Atividades";

		$this->load->view("templates/header", $dados);
		$this->load->view("templates/nav-top", $dados);
		$this->load->view("pages/atividades", $dados);
		$this->load->view("templates/footer", $dados);
		$this->load->view("templates/js", $dados);
	}

	public function new()
	{
		$dados["title"] = "Atividades";

		$this->load->view("templates/header", $dados);
		$this->load->view("templates/nav-top", $dados);
		$this->load->view("pages/formulario-atividade", $dados);
		$this->load->view("templates/footer", $dados);
		$this->load->view("templates/js", $dados);
	}

	public function cadastro()
	{
		$atividade = $_POST;
		// $atividade["idProjeto"] = 1	;

		$this->load->model("atividades_model");
		$this->atividades_model->cadastro($atividade);
		redirect("atividades");
 	}

	public function edit($id)
	{
		$this->load->model("atividades_model");
		
		$dados["atividade"] = $this->atividades_model->edicao($id);
		$dados["title"] = "Editar Atividade";

		$this->load->view("templates/header", $dados);
		$this->load->view("templates/nav-top", $dados);
		$this->load->view("pages/formulario-atividade", $dados);
		$this->load->view("templates/footer", $dados);
		$this->load->view("templates/js", $dados);
	}

	public function update($id)
	{
		$this->load->model("atividades_model");
		$atividade = $_POST;
		$this->atividades_model->update($id, $atividade);
		redirect("atividades");
	}

	public function delete($id)
	{
		$this->load->model("atividades_model");
		$this->atividades_model->destroy($id);
		redirect("atividades");
	}
}
