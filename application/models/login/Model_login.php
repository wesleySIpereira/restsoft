<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_login
 *
 * @author wesley
 */
class Model_login extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
        
    }
    
    public function login($sql) {
        
        $resultado= $this->db->query($sql);
        return $resultado->result();
    }  
    public function criarUsuario($dados) {
        $this->db->insert('tb_login',$dados);
    }
    public function listaUsuario() {
        return $this->db->get('tb_login')->result();
    }
    public function listUsuario($sql) {
        return $this->db->query($sql)->result();
    }
    public function atualizaUsuario($dados,$where) {
        $this->db->where($where);
        $this->db->update('tb_login', $dados);
        return true;
    }
    
}
