<?php

/*
 * Biblioteca para carrinho de compras 
 * Wesley da silva pereira
 * criada somente para essa aplicação
 * 08-01-2017
 */

Class Carrinho extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('produto/Model_produto', 'Mproduto');
    }

    public function addItem($id) {
        //verifica sessão

        if (!isset($_SESSION['itens'])) {

            $_SESSION['itens'] = array();
            $_SESSION['itens'][$id] = 1;
        } else {
            //se já existir eu adiciono itens no carrinho
            //verifica se o item já não existe no array
            if (!isset($_SESSION['itens'][$id])) {
                //se não adicionar ele 
                $_SESSION['itens'][$id] = 1;
            } else {
                //caso já exista soma + 1 a quantidade
                $_SESSION['itens'][$id] = $_SESSION['itens'][$id] + 1;
            }
        }
        //retorna o valor e a posição do carrinho atual
    }

    public function delItem($id) {
        if (isset($_SESSION['itens'][$id])) {
            unset($_SESSION['itens'][$id]);
        }
    }

    public function updateItem($idproduto,$prod,$qtd) {
                      if(empty($qtd) || $qtd == 0){
                              
                                    unset( $_SESSION['itens'][$prod]);
                              }else{
                         $_SESSION['itens'][$prod]=$qtd;
                              }
             }
          
           
            
    
    
}


