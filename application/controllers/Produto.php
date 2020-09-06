<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //inciar sessão para recuperar os dados do formulario
        //session_start();
        $this->load->model('cliente/Model_cliente', 'Mcliente');
        $this->load->model('endereco/Model_endereco', 'Mendereco');
        $this->load->model('produto/Model_produto', 'Mproduto');
        $this->load->library('GeradoComponentes');
        $this->load->library('upload');
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
        $dados['subTitulo'] = "Produtos";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['produto'] = $this->Mproduto->listaProdutos();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/produto/admin', $dados);
        $this->load->view('template/produto/footer');
    }

    public function novo() {
        $this->upload->initialize();
        $_SESSION['campos'] = null;
        $config["upload_path"] = base_url("/produto/imagens/");
        $config["allowed_types"] = "gif|jpg|png";
        $config["max_size"] = "100";
        $config["max_width"] = "1024";
        $config["max_height"] = "768";
        $config['file_name']='teste.jpg';
        $this->load->library('upload',$config);
        $this->upload->do_upload();
        $dados['subTitulo'] = "Novo Produto";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/produto/novo', $dados);
        $this->load->view('template/produto/footer');
        
    }

   

    public function salva() {
        //primeira coisa verificar se há um cliente cadastrado com os dados do critério de unicidade neste caso nome, endereço.
        //pega dados
       
        $campos = array(
            'produto_nome' => $this->input->post('txtnome'),
            'produto_valor' => $this->input->post('txtvalor'),
            'produto_descri' => $this->input->post('txtdescri')
            
        );
        $_SESSION['campos'] = $campos;
        $existe_produto = $this->Mproduto->verificaUnicidade($campos);
        if ($existe_produto) {
            //se cliente já existir chama a view novo e add variavel cliente_existe              
          
            $dados['subTitulo'] = "Novo Produto";
            $dados['produto_existe'] = 'sim';
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $this->load->view('template/header', $dados);
            $this->load->view('template/header_menu', $dados);
            $this->load->view('template/menu_lateral');
            $this->load->view('template/produto/novo', $dados);
            $this->load->view('template/produto/footer', $campos);
        } else {
            //caso não exista  salva novo cliente e envia  cliente_existe='sucesso'
            //salva na sequencia 


            // echo $id;
            /*
             * Salva pessoa agora que já possui um endereço
             */
            //pega dados do formulario
           
            $this->Mproduto->uploadImagem($this->input->post('txtarquivo'));
            $this->Mproduto->salva_produto($campos);
            //tudo dado certo ate aqui agora vamos chamar o formulario e passa o existe_cliente=sucesso 
            $_SESSION['campos'] = null;
           // session_abort();
            
            $dados['subTitulo'] = "Novo Produto";
            $dados['produto_existe'] = 'sucesso';
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $this->load->view('template/header', $dados);
            $this->load->view('template/header_menu', $dados);
            $this->load->view('template/menu_lateral');
            $this->load->view('template/produto/novo', $dados);
            $this->load->view('template/produto/footer');
        }
    }

    public function editar() {
        $id_produto= $this->uri->segment(3, 0);
        //pegar id do cliente e fazer select pegando todos id tb_pessoa,tb_endereco 
        #busca pelo cliente com id pego pelo method get
       

        $dados['produto'] = $this->Mproduto->listaProdutoEdit($id_produto);
        if (count($dados['produto']) == 0) {
            show_404();
        } else {
            $dados['subTitulo'] = "Editar Produto";
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $this->load->view('template/header', $dados);
            $this->load->view('template/header_menu', $dados);
            $this->load->view('template/menu_lateral');
            $this->load->view('template/produto/editar', $dados);
            $this->load->view('template/produto/footer');
        }
    }

    public function excluir($id) {
        $id_produto = $this->uri->segment(3, 0);
        $dados['produto'] = $this->Mproduto->listaProdutoEdit($id_produto);
        if (count($dados['produto']) == 0) {
            show_404();
        } else {
            $data = array(
                'produto_status' => 'INATIVO'
            );
            $this->Mproduto->atualiza_produto($data, $id_produto);

            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $dados['subTitulo'] = "Produtos";
            $dados['deletado'] = "sim";
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $dados['produto'] = $this->Mproduto->listaProdutos();
            $this->load->view('template/header', $dados);
            $this->load->view('template/header_menu', $dados);
            $this->load->view('template/menu_lateral');
            $this->load->view('template/produto/admin', $dados);
            $this->load->view('template/produto/footer');
        }
    }

    public function atualiza() {
        $id_produto = $this->uri->segment(3, 0); //pega a variavel via uri
        $produto = $dados['produto'] = $this->Mproduto->listaProdutoEdit($id_produto); //faz o select com where via uri que pegou
        
        $campos = array(
            'produto_nome' => $this->input->post('txtnome'),
            'produto_valor' => $this->input->post('txtvalor'),
            'produto_descri' => $this->input->post('txtdescri')
            
        );
        $this->Mproduto->atualiza_produto($campos, $id_produto);
        //tudo certo nada explodiu blz segue... agora atualizar o endereço

      
        
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Clientes";
        $dados['atualizado'] = "sim";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['produto'] = $this->Mproduto->listaProdutos();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/produto/admin', $dados);
        $this->load->view('template/produto/footer');
    }
    
    
   
}
