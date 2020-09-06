<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //inciar sessão para recuperar os dados do formulario
        $this->load->library('cart'); 
       $this->load->model('cliente/Model_cliente', 'Mcliente');
       $this->load->model('produto/Model_produto','Mproduto');
       $this->load->model('pedido/Model_pedido','Mpedido');
       $this->load->library('Carrinho','carrinho');
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
        $_SESSION['itens']=null;
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['cliente'] = $this->Mcliente->listaClientes();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/admin', $dados);
        $this->load->view('template/pedido/footer');
}
public function fazer_pedido() {
        //pegar o id do cliente
        $id_cliente=$this->uri->segment(3,0);
        $_SESSION['cliente']=$id_cliente;
        //faz um select pegando todos os dados do cliente no visao_cliente
        $dados['cliente']=$this->Mcliente->pegaDadosCliente($id_cliente);
        if(empty($dados['cliente']))
            {
            show_404();
            }else{
       $dados['produto']= $this->Mproduto->listaProdutos();
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
       
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/pedido', $dados);
        $this->load->view('template/pedido/footer');
            }
}
public function add_produto($id_cliente=null) {
    $id_produto=$this->uri->segment(3,0);
   
    $id_cliente=$_SESSION['cliente'];
    $this->carrinho->addItem($id_produto);//aqui adicionar no carrinho de compras
    
   
    
   
        $dados['cliente']=$this->Mcliente->pegaDadosCliente($id_cliente);
        $dados['produto']= $this->Mproduto->listaProdutos();
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
       
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/pedido', $dados);
        $this->load->view('template/pedido/footer');
}
public function del_produto() {
     $id_produto=$this->uri->segment(3,0);
   
    $id_cliente=$_SESSION['cliente'];
    $this->carrinho->delItem($id_produto);//aqui adicionar no carrinho de compras
    
   
    
   
       $dados['cliente']=$this->Mcliente->pegaDadosCliente($id_cliente);
       $dados['produto']= $this->Mproduto->listaProdutos();
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
       
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/pedido', $dados);
        $this->load->view('template/pedido/footer');
}
public function update_produto() {
    $id= $this->input->post('idcliente');
    $idproduto= $this->input->post('idproduto');
    $qtd= $this->input->post('qtd');
    $prod= $this->input->post('prod');
    var_dump($_SESSION['itens']);
    $this->carrinho->updateItem($idproduto,$prod,$qtd);
}
public function finaliza_pedido() {
    $this->Mpedido->finalizaPedido();
    $dados['pedido']=$this->Mpedido->visualizaPedido("SELECT * FROM `tb_pedido`,tb_cliente,tb_pessoa,tb_endereco,tb_rua,tb_bairro where c_idcliente=id_cliente and c_idpessoa=id_pessoa and c_idendereco=id_endereco and c_idrua=id_rua and c_idbairro=id_bairro");
   
   $dados['finalizado']='sim';
   $_SESSION['itens']=null;
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['cliente'] = $this->Mcliente->listaClientes();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/ver_pedido', $dados);
        $this->load->view('template/pedido/footer');

}
public function visualiza_pedido() {
   
  
   $dados['pedido']=$this->Mpedido->visualizaPedido("SELECT * FROM `tb_pedido`,tb_cliente,tb_pessoa,tb_endereco,tb_rua,tb_bairro where c_idcliente=id_cliente and c_idpessoa=id_pessoa and c_idendereco=id_endereco and c_idrua=id_rua and c_idbairro=id_bairro");
   
   
   $_SESSION['itens']=null;
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['cliente'] = $this->Mcliente->listaClientes();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/ver_pedido', $dados);
        $this->load->view('template/pedido/footer');
}
public function entrega_pedido() {
     $id_pedido=$this->uri->segment(3,0);
    
    $this->Mpedido->entregaPedido("UPDATE `tb_pedido` SET `pedido_status` = 'ENTREGA' WHERE `tb_pedido`.`id_pedido` ='$id_pedido'");
    $dados['pedido']=$this->Mpedido->visualizaPedido("SELECT * FROM `tb_pedido`,tb_cliente,tb_pessoa,tb_endereco,tb_rua,tb_bairro where c_idcliente=id_cliente and c_idpessoa=id_pessoa and c_idendereco=id_endereco and c_idrua=id_rua and c_idbairro=id_bairro");
   
   
        $_SESSION['itens']=null;
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['cliente'] = $this->Mcliente->listaClientes();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/ver_pedido', $dados);
        $this->load->view('template/pedido/footer');
}
public function finaliza_venda() {
    $id_pedido= $this->uri->segment(3,0);
     $venda_data= date('Y-m-d');
     $venda_hora= date('H:i:s', time()); 
     $valor_venda=0;
     $dados['item']= $this->Mpedido-> itensPedidos("SELECT * from visao_pedido where id_pedido='$id_pedido'");
     foreach ($dados['item'] as $value) {
       $valor_venda +=$value->item_total;
     }
   
   $dados=array(
       'venda_data'=>$venda_data,
       'venda_hora'=>$venda_hora,
       'venda_valor'=>$valor_venda,
       'c_idpedido'=>$id_pedido,
       'c_idfuncionario'=>$this->session->userdata('id_funcionario')
   );
  
   $this->Mpedido->entregaPedido("UPDATE `tb_pedido` SET `pedido_status` = 'FINALIZADO' WHERE `tb_pedido`.`id_pedido` ='$id_pedido'");
   $this->Mpedido->fechaVenda($dados);
   $dados['pedido']=$this->Mpedido->visualizaPedido("SELECT * FROM `tb_pedido`,tb_cliente,tb_pessoa,tb_endereco,tb_rua,tb_bairro where c_idcliente=id_cliente and c_idpessoa=id_pessoa and c_idendereco=id_endereco and c_idrua=id_rua and c_idbairro=id_bairro");
   
   
         $_SESSION['itens']=null;
         $dados['fechado']='sim';
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Pedidos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['cliente'] = $this->Mcliente->listaClientes();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/pedido/ver_pedido', $dados);
        $this->load->view('template/pedido/footer');
   
   
     }

}
