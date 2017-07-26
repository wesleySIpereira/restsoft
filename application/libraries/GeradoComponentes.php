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
    
}
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
