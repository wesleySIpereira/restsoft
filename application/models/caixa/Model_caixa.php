<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_caixa
 *
 * @author wesley
 */
class Model_caixa extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function listaCaixa() {
        return $this->db->get('tb_caixa')->result();
    }

    public function salva_caixa($dados) {
        $this->db->insert('tb_caixa', $dados);
    }

    public function consultaSaldo($dados = null) {
        $this->db->select("sum(caixa_valor) as total")->where(array('caixa_mov' => 'ENTRADA'));
        $totsoma = $this->db->get('tb_caixa')->result();
        $adicao = $totsoma[0]->total;
        $this->db->select("sum(caixa_valor) as subtrai")->where(array('caixa_mov' => 'SAÌDA'));
        $totsub = $this->db->get('tb_caixa')->result();
        $subtrair = $totsub[0]->subtrai;
        return $resultado = $adicao - $subtrair;
    }

}
