<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controller Caixa   
 *
 * @author wesley 2017
 */
class Caixa  extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('caixa/Model_caixa','Mcaixa');
        $this->load->model('pedido/Model_pedido','Mpedido');
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
        
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Caixa";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['caixa']=$this->Mcaixa->listaCaixa();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/caixa/admin', $dados);
        $this->load->view('template/caixa/footer');
    }
    public function entrada() {
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Movimentação Caixa";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['caixa']=$this->Mcaixa->listaCaixa();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/caixa/novo', $dados);
        $this->load->view('template/caixa/footer');
    }
    public function salva() {
        //pega valores via post
        $caixa_mov= $this->input->post('txttipo');
        $caixa_valor= $this->input->post('txtvalor');
        $c_idfucionario= $this->session->userdata('id_funcionario');
        $caixa_obs= $this->input->post('txtobs');
        $caixa_data= date('Y-m-d');
        $caixa_hora= date('H:i:s', time());
        //verifica se saldo é maior ou igual a baixa se caixa_mov vindo do post for SAÌDA
        $saldo=$this->Mcaixa->consultaSaldo($dados=null);
      // if($caixa_mov<>'ENTRADA'){
         if($caixa_mov<>'ENTRADA' and $saldo < $caixa_valor ){ 
       
        $dados['sem_saldo']='sim';
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Caixa";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['caixa']=$this->Mcaixa->listaCaixa();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/caixa/admin', $dados);
        $this->load->view('template/caixa/footer');     
             
         }else{
            

        $dados=array(
            'caixa_mov'=>$caixa_mov,
            'caixa_valor'=>$caixa_valor,
            'caixa_data'=>$caixa_data,
            'caixa_hora'=>$caixa_hora,
            'c_idfuncionario'=>$c_idfucionario,
            'caixa_func'=> $this->session->userdata('funcionario_nome'),
            'caixa_obs'=>$caixa_obs
        );
        $this->Mcaixa->salva_caixa($dados);
        $dados['mov']='sim';
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Caixa";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['caixa']=$this->Mcaixa->listaCaixa();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/caixa/admin', $dados);
        $this->load->view('template/caixa/footer'); 
       }
    
}

    }
//}