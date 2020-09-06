<!-- Page Content -->
<br>
<div id="page-wrapper">
    <div class="container-fluid">
        <!--Tablela simples -->
            <div class="row">
                <div class="col-lg-12">
                    <?php if (isset($atualizado)and $atualizado == 'sim') { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Produto Atualizado!</center>
                        </div>
                    <?php } ?>
                    <?php if (isset($deletado)and $deletado == 'sim') { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Produto Deletado!</center>
                        </div>
                    <?php } ?>

         
                
                    <div class="col-lg-6">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                          Produtos 
                        </div>
                        <div class="panel-body">
                       <!--   <div class="table-responsive"> -->
                                         <table width="100%" class="table table-striped table-bordered table-hover" id="lista_clientes_pedidos">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                        <th>Adicionar</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                                if(!empty($produto)){
                                                   // var_dump($cliente);
                                                 foreach ($produto as $dproduto) { ?>
                                                <tr>
                                                <td><?php echo $dproduto->produto_nome; ?></td> 
                                                <td><?php echo "R$: ". $dproduto->produto_valor; ?></td>   
                                              
                                                <td><a href="<?php echo base_url('index.php/pedido/add-produto/'.$dproduto->id_produto.'') ?>" title="Adicionar Produto" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Adicionar</a></td>
                                               
                                                <?php echo '</tr>'; }} ?>
                                                 </tbody>
                                   
                                                <!-- aqui vai a parte da busca no banco de dados view_cliente -->
                                                
                                            </table>
                                           
                                     <!--   </div> -->
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                                
                             </div>
                                
                        
                        <!-- /.panel-body -->
                    </div>
                    <div class="col-lg-6">
                    <div class="panel panel-info">
                       
                        <div class="panel-heading">
                           Dados do Cliente
                        </div>
                        <div class="panel-body">
                          <h5 class="success">Cliente: <strong><?php echo $cliente[0]->nome; ?></strong></h5>
                        </div>
                        <div class="panel-footer">
                         <!--    <div class="table-responsive"> -->
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                         
                                            <th class="info">Produto</th>
                                            <th class="info">Qtd</th>
                                            <th class="info">Preço</th>
                                            
                                            <th class="info">Subtotal</th>
                                            <th class="info"><i class="fa fa-trash"></i> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                      <?php if (count($_SESSION['itens']) == 0) {
                                                ?>
                                                <td colspan="6">
                                                    <div  <div class="alert alert-warning">
                                                            <center> <h4>Carrinho Vazio
                                              
                                                                </h4></center></div>     
                                                </td>  
                                            <?php }else{
                                             $total=0;   
                                             foreach ($_SESSION['itens'] as $id => $qtd) {
                                                    $dados=$this->Mproduto->listaProdutoEdit($id); ?>
                                                <td><?php echo $dados[0]->produto_nome; ?></td>
                                                <td><input type="text" size="3"  id="qtd"  name="<?php echo $id;?>" onchange="atualizaCompra(this.name,this.value)"  value="<?php echo $qtd;  ?>"></td>    
                                                <input type="hidden" id="idcliente"  value="<?php echo $_SESSION['cliente']; ?>" >
                                                <input type="hidden" id="idproduto" value="<?php echo $id ;?>">
                                                
                                                 <td><?php echo number_format($dados[0]->produto_valor,2,',','.');  ?></td>     
                                                  <td><?php echo number_format($qtd * $dados[0]->produto_valor, 2,',', '.');  ?></td>    
                                                  <td><a href="<?php echo base_url('index.php/pedido/del-produto/').$id; ?>"><i class="fa fa-trash alert-danger"></i></a> </td>
                                                    </tr>
                                                  <?php //calcula total e formata  
                                                  
                                                  $total+= $qtd * $dados[0]->produto_valor;
                                                     ?>
                                                
                                              <?php  }  ?>
                                                
                                                
                                                
                                                
                                      <?php     } ?>  
                                                    </tr>    
                                                <td colspan="3">
                                                <div  <div class="alert alert-success">
                                                        <h4>TOTAL A PAGAR: <?php if(isset($total)){ echo number_format($total,2,',','.');}?></h4></div>     
                                            </td>  
                                            <td colspan="3">
                                                <a href="<?php echo base_url('index.php/pedido/finaliza-pedido') ?>" class="btn btn-lg btn-primary">Fechar Pedido</a> 
                                            </td>
                                           
                                        </tr>
                                       
                                    </tbody>
                                </table>
                          <!--  </div> -->
                        </div>
                                
                             </div>
                </div>
                    <!-- /.panel -->
                </div>
                      
                <!-- /.col-lg-12 -->
            </div>
          
                </div>

                <!--fim tabela-->
            </div>
            <!-- /.col-lg-12 -->
    </div>

