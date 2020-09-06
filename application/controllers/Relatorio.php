<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once './application/third_party/fpdf/fpdf.php';

class Relatorio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('cliente/Model_cliente','Mcliente');  
        $this->load->model('pedido/Model_pedido','Mpedido');
        $this->load->model('caixa/Model_caixa','Mcaixa');
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
    $dados['acao']='nada';
     $dados['totalClientes']= $this->Mcliente->totalCliente();
     $dados['totalPedido']= $this->Mpedido->totalEntregas();
     $dados['teste']= $this->Mcaixa->consultaSaldo();
     $dados['total_caixa']= $this->Mcaixa->consultaSaldo();//$this->Mpedido->totalVenda('SELECT SUM(venda_valor) as total FROM tb_venda');
    $dados['Titulo'] = "RestSoft | Sistema de Gestão";
    $this->load->view('template/header',$dados);
    $this->load->view('template/header_menu',$dados);
    $this->load->view('template/menu_lateral',$dados);
    $this->load->view('template/relatorios/page',$dados);
    $this->load->view('template/footer',$dados);
    }
    public function rel_cliente() {
    $dados['acao']='lista_clientes';    
    $dados['nome_funcionario']= $this->session->userdata('pessoa_nome');
    $this->load->view('template/relatorios/relatorio',$dados);
    }
     public function rel_pedido(){
     $dados['acao']='lista_pedidos';   
     $dados['nome_funcionario']= $this->session->userdata('pessoa_nome');
     $this->load->view('template/relatorios/relatorio',$dados);    
         
     }
     public function exemplo() {
      $dados['acao']='exemplo';   
     $dados['nome_funcionario']= $this->session->userdata('pessoa_nome');
     $dados['cliente'] = $this->Mcliente->listaClientes();
     $this->load->view('template/relatorios/relatorio',$dados);    
            
     }
    
}