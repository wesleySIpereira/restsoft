<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //inciar sessão para recuperar os dados do formulario
        session_start();
        $this->load->model('cliente/Model_cliente', 'Mcliente');
        $this->load->model('endereco/Model_endereco', 'Mendereco');
        $this->load->model('pessoa/Model_pessoa', 'Mpessoa');
        $this->load->library('GeradoComponentes');
    }

    public function index() {

        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['subTitulo'] = "Clientes";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $dados['cliente'] = $this->Mcliente->listaClientes();
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/cliente/admin', $dados);
        $this->load->view('template/footer');
    }

    public function novo() {
        $campos = array(
            'txtnumero' => $this->input->post('txtnumero'),
            'txtmae' => $this->input->post('txtmae'),
            'pessoa_nome' => $this->input->post('txtnome'),
            'pessoa_mae' => $this->input->post('txtmae'),
            'pessoa_email' => $this->input->post('txtemail'),
            'pessoa_cpf' => $this->input->post('txtcpf'),
            'pessoa_celular' => $this->input->post('txtcelular'),
            'pessoa_telefone' => $this->input->post('txttelefone'),
            'pessoa_rg' => $this->input->post('txtrg'),
            'pessoa_nascimento' => $this->input->post('txtdatanascimento'),
            'pessoa_pai' => $this->input->post('txtpai')
        );
        $_SESSION['campos'] = $campos;
        $dados['bairro'] = $this->Mendereco->listaBairro();
        $dados['subTitulo'] = "Novo Cliente";
        $dados['Titulo'] = "RestSoft | Sistema de Gestão";
        $this->load->view('template/header', $dados);
        $this->load->view('template/header_menu', $dados);
        $this->load->view('template/menu_lateral');
        $this->load->view('template/cliente/novo', $dados);
        $this->load->view('template/footer');
    }

    public function lista_rua() {
        $idbairro = $this->input->post('bairro');

        $dados = $this->Mendereco->lista_rua($idbairro);
        return CriaCampoSelect($dados, $label = 'RUA', $class = 'form-control', $id = 'rua', $name = 'txtrua', $value = null);
    }

    public function salva_rua() {

        $data = array(
            'c_idbairro' => $this->input->post('bairro'),
            'rua_nome' => $this->input->post('txtrua')
        );
        $this->Mendereco->salvar_rua($data);
    }

    public function salvar_bairro() {
        $data = array(
            'bairro_nome' => $this->input->post('bairro')
        );
        $this->Mendereco->salvar_bairro($data);
    }

    public function salva() {
        //primeira coisa verificar se há um cliente cadastrado com os dados do critério de unicidade neste caso nome, endereço.
        //pega dados
        $dados = array(
            $nome = $this->input->post('txtnome'),
            $bairro = $this->input->post('txtbairro'),
            $rua = $this->input->post('txtrua')
        );
        $campos = array(
            'txtnumero' => $this->input->post('txtnumero'),
            'txtmae' => $this->input->post('txtmae'),
            'pessoa_nome' => $this->input->post('txtnome'),
            'pessoa_mae' => $this->input->post('txtmae'),
            'pessoa_email' => $this->input->post('txtemail'),
            'pessoa_cpf' => $this->input->post('txtcpf'),
            'pessoa_celular' => $this->input->post('txtcelular'),
            'pessoa_telefone' => $this->input->post('txttelefone'),
            'pessoa_rg' => $this->input->post('txtrg'),
            'pessoa_nascimento' => $this->input->post('txtdatanascimento'),
            'pessoa_pai' => $this->input->post('txtpai')
        );
        $_SESSION['campos'] = $campos;
        $existe_cliente = $this->Mcliente->verificaUnicidade($dados);
        if ($existe_cliente) {
            //se cliente já existir chama a view novo e add variavel cliente_existe              
            $dados['bairro'] = $this->Mendereco->listaBairro();
            $dados['subTitulo'] = "Novo Cliente";
            $dados['cliente_existe'] = 'sim';
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $this->load->view('template/header', $dados);
            $this->load->view('template/header_menu', $dados);
            $this->load->view('template/menu_lateral');
            $this->load->view('template/cliente/novo', $dados);
            $this->load->view('template/footer', $campos);
        } else {
            //caso não exista  salva novo cliente e envia  cliente_existe='sucesso'
            //salva na sequencia 

            $endereco = array(//pega dados do endereco
                'c_idrua' => $this->input->post('txtrua'),
                'end_rua' => $this->input->post('txtnumero')
            );

            $this->Mendereco->salva_endereco($endereco);
            //pega o id do endereco
            $end_rua = $this->input->post('txtnumero');
            $rua_nome = $this->input->post('txtrua');
            $idbairro = $this->input->post('txtbairro');
            $idendereco = $this->Mendereco->lista_endereco($end_rua, $rua_nome, $idbairro);
            $id = $idendereco[0]->id_endereco;


            // echo $id;
            /*
             * Salva pessoa agora que já possui um endereço
             */
            //pega dados do formulario
            $dados = array(
                'pessoa_nome' => $this->input->post('txtnome'),
                'pessoa_mae' => $this->input->post('txtmae'),
                'pessoa_email' => $this->input->post('txtemail'),
                'pessoa_cpf' => $this->input->post('txtcpf'),
                'pessoa_celular' => $this->input->post('txtcelular'),
                'pessoa_telefone' => $this->input->post('txttelefone'),
                'pessoa_rg' => $this->input->post('txtrg'),
                'pessoa_nascimento' => $this->input->post('txtnascimento'),
                'c_idendereco' => $id,
                'pessoa_pai' => $this->input->post('txtpai')
            );
            $this->Mpessoa->salva_pessoa($dados);
            //pega id da pessoa cadastrada
            $nome = $this->input->post('txtnome');

            $resp = $this->Mpessoa->lista_pessoa($nome, $id);
            $idpessoa = $resp[0]->id_pessoa;
            $dados = array(
                'c_idpessoa' => $idpessoa,
                'cliente_cadastro' => date('Y-m-dd')
            );
            $this->Mcliente->salva_cliente($dados);
            //tudo dado certo ate aqui agora vamos chamar o formulario e passa o existe_cliente=sucesso 
            $_SESSION['campos'] = null;
            session_abort();
            $dados['bairro'] = $this->Mendereco->listaBairro();
            $dados['subTitulo'] = "Novo Cliente";
            $dados['cliente_existe'] = 'sucesso';
            $dados['Titulo'] = "RestSoft | Sistema de Gestão";
            $this->load->view('template/header', $dados);
            $this->load->view('template/header_menu', $dados);
            $this->load->view('template/menu_lateral');
            $this->load->view('template/cliente/novo', $dados);
            $this->load->view('template/footer');
        }
    }

}

/*
 * 	


txtdatanascimento	
12/34/1243



txtnumero	
numero
txtpai	




 */