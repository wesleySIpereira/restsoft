<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Controlador para logar usuario no sistema
     */
    public function __construct() {
        parent::__construct();


        $this->load->model('login/Model_login', 'Mlogin');
    }

    public function login() {


        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $this->load->view('template/header', $dados);
        $this->load->view('template/login/page-login', $dados);
    }

    public function entrar() {
        $user = $this->input->post('txtuser');
        $senha = $this->input->post('txtsenha');
        $sql = "select * from tb_login,tb_funcionario,tb_pessoa where c_idfuncionario=id_funcionario and c_idpessoa=id_pessoa and login_nome='$user' and login_senha='$senha'";
        if (count($this->Mlogin->login($sql)) <> 0) {
            //setar todos os dados necessarios para sessão incluindo i id do funcionario que fara a venda
            $dados = $this->Mlogin->login($sql);

            $array = array('logado' => True,
                'id_funcionario' => $dados[0]->id_funcionario,
                'funcionario_nome' => $dados[0]->login_nome,
                'login_tipo' => $dados[0]->login_tipo,
                'pessoa_nome' => $dados[0]->pessoa_nome,
                'login_status' => $dados[0]->login_status
            );

            $this->session->set_userdata($array);
            if ($this->session->userdata('login_status') <> 'ATIVO') {
                $dados['logar'] = 'permicao';
                $dados['Titulo'] = "RestSoft | Sistema de Gestão";
                $this->load->view('template/header', $dados);
                $this->load->view('template/login/page-login', $dados);
                $this->load->view('template/login/footer', $dados);
            } else {
                redirect('inicio');
            }
        } else {
            $this->session->sess_destroy();
            $dados['erro_login'] = 'sim';
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $this->load->view('template/header', $dados);
            $this->load->view('template/login/page-login', $dados);
            $this->load->view('template/login/footer', $dados);
        }
    }

    public function sair() {
        $this->session->sess_destroy();
        redirect('inicio');
    }

}
