<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GeradoComponentes
 *
 * @author wesley
 */
class GeradoComponentes {
    

    function CriaCampoSelect($dados=null,$label=null,$class='form-control',$id=null,$name=null,$value=null) {
        echo'<div clas=form-group>';
        echo "<label>".$label."</label>"
        . "<select class='".$class."' id='".$id."' name='".$name."'>
         <option    selected value='".$value."'>Selecione</option>";
        foreach ($dados as $cidade) {
          
          echo "
          <option  value='".$cidade->id_rua."'>".$cidade->rua_nome."</option>";
         

                              
            
        }
        echo "</select>";
        echo '<br><a class="btn btn-success btn-xl" data-toggle="modal" data-target="#nova_rua">Adicionar Rua</a>';
        echo '</div>';
}
function CriaTabela($cliente) {
     $cabecalho='
      <table border=1>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>UF</th>
                                        <th>Cidade</th>
                                        <th>Bairro</th>
                                        <th>Rua</th>
                                        <th>Nº</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>';
                               
                                                if(!empty($cliente)){
                                                   // var_dump($cliente);
                                                 foreach ($cliente as $dcliente) { 
                                                $corpo='<tr>
                                                <td>'. $dcliente->nome.'</td> 
                                                <td>'.$dcliente->uf.'</td>   
                                                <td>'.$dcliente->cidade.'</td>
                                                <td>'.$dcliente->nm_bairro.'</td>
                                                <td>'.$dcliente->nm_rua.'</td>
                                                <td>'.$dcliente->rua.'</td>
                                               
                                                </tbody>
                                   
                                                <!-- aqui vai a parte da busca no banco de dados view_cliente -->
                                                
                                            </table>';
    
    
    
    
}
                                                }
                                                return $tabela=$cabecalho.$corpo;
}
}