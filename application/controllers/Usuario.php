<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author wesley
 */
class Usuario extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
         $this->load->model('funcionario/Model_funcionario', 'Mfuncionario');
       
        $this->load->model('login/Model_login', 'Mlogin');
        $this->load->library('GeradoComponentes');
        if(!$this->session->userdata('logado') )
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
         $id=$this->session->userdata('id_funcionario');
       $dados['ja_usuario']= $this->Mlogin->login("select * from tb_login where c_idfuncionario='$id'");  
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Usuários";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['funcionario'] = $this->Mfuncionario->listaFuncionario();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/usuario/admin', $dados);
        $this->load->view('template/usuario/footer'); 
    }
    public function adicionar() {
       $dados['id_usuario']=$this->uri->segment(3, 0);
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Usuários";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['funcionario'] = $this->Mfuncionario->listaFuncionario();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/usuario/novo', $dados);
        $this->load->view('template/usuario/footer');   
    }
    public function salva() {
        $id_fucionario= $this->input->post('txtidfuncionario');
        $perfil= $this->input->post('txtperfil');
        $senha= $this->input->post('txtsenha');
        $usuario= $this->input->post('txtusuario');
        $dados=array(
          'c_idfuncionario'=>$id_fucionario,
          'login_tipo'=>$perfil,
          'login_permicao'=>$perfil,
          'login_nome'=>$usuario,
          'login_senha'=>$senha  
        );
        $this->Mlogin->criarUsuario($dados);
        //atualiza a tabela usario dizendo que tem um usuario criado mudando tem_usario de 0 para 1
        $fun=array(
            'tem_usuario'=>'1'
        );
        $this->Mfuncionario->atualiza_funcionario($fun,$id_fucionario); 
       $dados['Titulo'] = "RestSoft | Sistema de Gestão";
       $dados['criado_user']='sim';
       $id=$this->session->userdata('id_funcionario');
       $dados['ja_usuario']= $this->Mlogin->login("select * from tb_login where c_idfuncionario='$id'");        
       
       $dados['subTitulo'] = "Usuários";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['funcionario'] = $this->Mfuncionario->listaFuncionario();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/usuario/admin', $dados);
        $this->load->view('template/usuario/footer');  
    }
    public function edita() {
      $id=$this->uri->segment(3, 0);//pega o id do usuarios para editar
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Editar Usuário";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['usuario'] = $this->Mlogin->login("select * from tb_login where c_idfuncionario='$id'");
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/usuario/editar', $dados);
        $this->load->view('template/usuario/footer'); 
    }
    public function atualiza() {
        $id=$this->uri->segment(3, 0);//pega o id do usuarios para editar
        //atualiza o dados 
        /*pega dados vindo via post pelo formulario
         * Wesley  <><><><><>><><
         */
        $status= $this->input->post('txtativo');
        $perfil= $this->input->post('txtperfil');
        $senha= $this->input->post('txtsenha');
        $usuario= $this->input->post('txtusuario');
        $dados=array(
          'login_status'=>$status,
          'login_tipo'=>$perfil,
          'login_permicao'=>$perfil,
          'login_nome'=>$usuario,
          'login_senha'=>$senha  
        );
        $where=array(
          'id_login'=>$id  
        );
        $this->Mlogin->atualizaUsuario($dados,$where);
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Usuários";
        $dados['atulizado']='sim';
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['funcionario'] = $this->Mfuncionario->listaFuncionario();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/usuario/admin', $dados);
        $this->load->view('template/usuario/footer'); 
    }
}
