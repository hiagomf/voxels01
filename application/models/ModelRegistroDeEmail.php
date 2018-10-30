<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class ModelRegistroDeEmail extends CI_Model{
		public function inserirDados($dados){
			$this->db->insert('registros', $dados);
		}
	}