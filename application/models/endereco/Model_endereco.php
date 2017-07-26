<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_endereco
 *
 * @author wesley
 */
class Model_endereco extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listaBairro($id = null) {

        return $this->db->get('tb_bairro')->result();
    }

    public function lista_rua($bairro) {
        $this->db->where('c_idbairro', $bairro);
        return $this->db->get('tb_rua')->result();
    }

    public function salvar_rua($dados) {
        return $this->db->insert('tb_rua', $dados);
    }

    public function salvar_bairro($dados) {
        return $this->db->insert('tb_bairro', $dados);
    }

    public function salva_endereco($dados) {
        return $this->db->insert('tb_endereco', $dados);
    }

    public function lista_endereco($end_rua, $rua_nome, $idbairro) {


        return $this->db->query("select * from  visao_endereco where id_rua='$rua_nome' and idbairro='$idbairro' and end_rua='$end_rua'")->result();
    }

}
