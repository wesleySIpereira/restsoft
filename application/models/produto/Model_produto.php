<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produto extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listaProdutos() {
        $this->db->where(array('produto_status' => 'ATIVO'));
        return $this->db->get('tb_produto')->result();
    }

    public function totalCliente() {
        $this->db->where(array('cli_estatus' => 'ATIVO'));
        return $this->db->get('visao_cliente')->num_rows();
    }

    public function verificaUnicidade($dados) {
        return $this->db->get_where('tb_produto',$dados)->result();
    }

    public function salva_produto($dados) {
        return $this->db->insert('tb_produto', $dados);
    }
    public function listaProdutoEdit($id=null) {
        $this->db->where(array('produto_status' => 'ATIVO','id_produto'=>$id));
        return $this->db->get('tb_produto')->result();
    }
    public function atualiza_produto($dados,$where) {
        
        $this->db->where(array('id_produto'=>$where));

       $this->db->update('tb_produto', $dados);
       return true;
    }
     public function uploadImagem($arquivo=null) {
     
// verifica se foi enviado um arquivo 
if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

	echo "Você enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
	echo "Este arquivo é do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
	echo "Temporáriamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
	echo "Seu tamanho é: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";

	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	

	// Pega a extensao
	$extensao = strrchr($nome, '.');

	// Converte a extensao para mimusculo
	$extensao = strtolower($extensao);

	// Somente imagens, .jpg;.jpeg;.gif;.png
	// Aqui eu enfilero as extesões permitidas e separo por ';'
	// Isso server apenas para eu poder pesquisar dentro desta String
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . '.' . $extensao;
		
		// Concatena a pasta com o nome
		$destino = 'imagens/' . $novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  ))
		{
                    
                
                }
    }

}
    }
    
    public function listaProdutoCar($id=null) {
        $this->db->where(array('produto_status' => 'ATIVO','id_produto'=>$id));
        return $this->db->get('tb_produto')->result_array();
}

}
