<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //inciar sessão para recuperar os dados do formulario
       // session_start();
        $this->load->model('cliente/Model_cliente', 'Mcliente');
        $this->load->model('endereco/Model_endereco', 'Mendereco');
        $this->load->model('pessoa/Model_pessoa', 'Mpessoa');
        $this->load->library('GeradoComponentes');
        $this->load->library('Funcoes','Funcoes');
         if(!$this->session->userdata('logado'))
                  {
                  $dados['logar']='erro';
                  redirect("login/login",$dados);
                  }
                  if($this->session->userdata('login_status')<>'ATIVO')
                       {
                          $dados['logar']='permicao';
                          redirect("login/login",$dados);
                       } 
    }
    
    public function index() {
       $data = new Funcoes();
       echo $data->FormataDataSql('18/06/2016',2);
       
    }
    
    
}
    
    