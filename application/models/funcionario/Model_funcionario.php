<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_funcionario extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listaFuncionario() {
        $this->db->where(array('fun_estatus' => 'ATIVO'));
        return $this->db->get('visao_funcionario')->result();
    }

    public function totalFucionario() {
        $this->db->where(array('fun_estatus' => 'ATIVO'));
        return $this->db->get('visao_funcionario')->num_rows();
    }

    public function verificaUnicidade($dados) {
        return $this->db->get_where('visao_funcionario', array('nome' => $dados[0], 'id_bairro' => $dados[1], 'id_rua' => $dados[2]))->result();
    }

    public function salva_funcionario($dados) {
        return $this->db->insert('tb_funcionario', $dados);
    }

    public function listaFuncionarioEdit($id = null) {
        $this->db->where(array('fun_estatus' => 'ATIVO', 'id_funcionario' => $id));
        return $this->db->get('visao_funcionario')->result();
    }

    public function atualiza_funcionario($dados, $where) {

        $this->db->where(array('id_funcionario' => $where));

        $this->db->update('tb_funcionario', $dados);
        return true;
    }

    public function update_funcionario($dados, $where) {
        
    }
    public function pegaIdFuncionario($where) {
         $this->db->where($where);
         $this->db->select('id_funcionario');
         return $this->db->get('tb_funcionario')->result();
         
    }
    

}
