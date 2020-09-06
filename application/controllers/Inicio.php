<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            parent::__construct();
              $this->load->model('cliente/Model_cliente','Mcliente');
              $this->load->model('endereco/Model_endereco','Mendereco');
              $this->load->model('pedido/Model_pedido','Mpedido');
              $this->load->model('login/Model_login','Mlogin');
              $this->load->model('caixa/Model_caixa','Mcaixa');
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
         
        $dados['entregas']= $this->Mpedido->totalEntregas(array('pedido_status'=>'PENDENTE'));
        $dados['e_finalizadas']= $this->Mpedido->totalEntregas(array('pedido_status'=>'FINALIZADO'));
        $dados['a_entregar']= $this->Mpedido->totalEntregaAndamento(array('pedido_status'=>'ENTREGA'));
        $dados['total_caixa']= $this->Mpedido->totalVenda('SELECT SUM(venda_valor) FROM tb_venda');
        $dados['totalClientes']= $this->Mcliente->totalCliente();
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/page', $dados);
        $this->load->view('template/footer');
        }
       
               
	
}
