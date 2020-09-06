<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_pedido
 *
 * @author wesley
 */
class Model_pedido extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->model('produto/Model_produto', 'Mproduto');
    }
    public function salva_itensPedidos($dados) {
        return $this->db->insert('tb_itenspedido',$dados);
    }
    public function salva_pedido($dados) {
       return $this->db->insert('tb_pedido',$dados);  
    }
    public function pega_idpedido($dados) {
        $this->db->where($dados);
        return $this->db->get('tb_pedido')->result();
    }  
    public function finalizaPedido() {
       
        //pego id do cliente, id do funcionario para gravar um pedido
       //id funcionario teste 2
       //data ataual do pedido
       $data_pedido= date('Y-m-d');
       $hora_pedido= date('H:i:s', time()); 
       
       //gravar novo registro pedido
       //id do funcionario 
       $id_funcionario=$this->session->userdata('id_funcionario');
       $dados=array(
           'pedido_data'=>$data_pedido,
           'pedido_hora'=>$hora_pedido,
           'c_idcliente'=>$_SESSION['cliente'],
           
           'c_idfuncionario'=>$id_funcionario//lembrar de colocar no session login
       );
      
      $this->salva_pedido($dados);
      $dada=$this->pega_idpedido($dados);
      $id_pedido=$dada[0]->id_pedido;
      //gravar itens pedidos
      $total=0;
       foreach ($_SESSION['itens'] as $id => $qtd) {
       $dados=$this->Mproduto->listaProdutoEdit($id); 
       $id_produto=$id;
       $quantidade=$qtd;
       $total+= $qtd * $dados[0]->produto_valor;
       $dados=array(
           'c_idproduto'=>$id_produto,
           'item_qtd'=>$quantidade,
           'item_total'=>$total,
           'c_idpedido'=>$id_pedido
       );
       
       $this->salva_itensPedidos($dados); 
       //redirect(base_url('index.php/pedido'));
    }   
   
        
    }
     public function totalEntregas($where=null) {
       if($where==null){ return $this->db->get('tb_pedido')->num_rows();
       
       }else{ $this->db->where($where);
       return $this->db->get('tb_pedido')->num_rows();}
}
public function totalEntregaAndamento($where) {
    $this->db->where($where);
        return $this->db->get('tb_pedido')->num_rows();
}
public function visualizaPedido($sql) {
    
    return $this->db->query($sql)->result();
    
}
public function itensPedidos($sql) {
    return $this->db->query($sql)->result();
}
public function entregaPedido($sql) {
   return $this->db->query($sql);
}
public function fechaVenda($dados) {
    $this->db->insert('tb_venda',$dados);
    //faz entrada na tb_caixa 
    /*
    $dados=array(
       'venda_data'=>$venda_data,
       'venda_hora'=>$venda_hora,
       'venda_valor'=>$valor_venda,
       'c_idpedido'=>$id_pedido,
       'c_idfuncionario'=>$this->session->userdata('id_funcionario')
   );*/
    $dados=array(
     'caixa_data'=>$dados['venda_data'],
     'caixa_hora'=>$dados['venda_hora'],
     'caixa_valor'=>$dados['venda_valor'],
     'c_idfuncionario'=>$dados['c_idfuncionario'],
     'c_idpedido'=>$dados['c_idpedido'],
     'caixa_func'=> $this->session->userdata('pessoa_nome')
        
    );
    $this->db->insert('tb_caixa',$dados);
}
public function totalVenda($sql) {
    return $this->db->query($sql)->result();
    
}
}

