<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_pessoa
 *
 * @author wesley
 */
class Model_pessoa extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function salva_pessoa($dados) {
        return $this->db->insert('tb_pessoa',$dados);
    }
    public function lista_pessoa($nome,$idendereco) {
      return  $this->db->query("select id_pessoa from tb_pessoa where  pessoa_nome='$nome' and c_idendereco='$idendereco'")->result();
    } 
    
}
