<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerRegistroDeEmail extends CI_Controller {

	public function registrarEmail(){
		$this->load->Model('ModelRegistroDeEmail', '', TRUE);
		$dados = array(
			'nome' => $this->input->post('nome'),
			'telefone' => $this->input->post('telefone'),
			'email' => $this->input->post('email'),
			'status' => 0);

		try {
			$this->ModelRegistroDeEmail->inserirDados($dados);
			echo '<script>alert("Recebemos sua mensagem! Aguarde nosso contato ;)"</script>';
			$this->load->view('pagina_inicial');
		} catch (Exception $e) {
		    echo 'ERRO'.$e;
		}
		
		
	}
}
