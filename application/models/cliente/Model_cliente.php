<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cliente extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listaClientes() {
        $this->db->where(array('cli_estatus' => 'ATIVO'));
        return $this->db->get('visao_cliente')->result();
    }

    public function totalCliente() {
        $this->db->where(array('cli_estatus' => 'ATIVO'));
        return $this->db->get('visao_cliente')->num_rows();
    }

    public function verificaUnicidade($dados) {
        return $this->db->get_where('visao_cliente', array('nome' => $dados[0], 'id_bairro' => $dados[1], 'id_rua' => $dados[2]))->result();
    }

    public function salva_cliente($dados) {
        return $this->db->insert('tb_cliente', $dados);
    }
    public function listaClienteEdit($id=null) {
        $this->db->where(array('cli_estatus' => 'ATIVO','id_cliente'=>$id));
        return $this->db->get('visao_cliente')->result();
    }
    public function atualiza_cliente($dados,$where) {
        
        $this->db->where(array('id_cliente'=>$where));

       $this->db->update('tb_cliente', $dados);
       return true;
    }
    public function update_cliente($dados,$where) {
        
    }
    public function pegaDadosCliente($where) {
        $this->db->where(array('id_cliente' => $where));
        return $this->db->get('visao_cliente')->result();
    }

}
