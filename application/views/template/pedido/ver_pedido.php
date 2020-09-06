<!-- Page Content -->
<br>
<div id="page-wrapper">
    <div class="container-fluid">
        <!--Tablela simples -->
            <div class="row">
                <div class="col-lg-12">
                    <?php if (isset($finalizado)and $finalizado == 'sim') { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Pedido Registrado, aguardando envio !</center>
                        </div>
                    <?php } ?>
                    <?php if (isset($fechado)and $fechado == 'sim') { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Venda Efetuada!</center>
                        </div>
                    <?php } ?>
     <div id="map_content"></div>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading panel-green">
                            Pedidos
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                       
                                </div>
                             </div>
                                <div class="table-responsive">
                                         <table width="100%" class="table table-striped table-condensed table-bordered table-hover" id="lista_pedidos">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>DATA</th>
                                        <th>HORA</th>
                                        <th>CLIENTE</th>
                                      
                                  
                                        <th >VISUALIZAR</th>
                                        <th >AÇÃO</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                                if(!empty($pedido)){
                                                   // var_dump($cliente);
                                                 foreach ($pedido as $dpedido) { ?>
                                                
                                                <?php if($dpedido->pedido_status=="PENDENTE"){?>   
                                                  <tr>
                                                   <?php   $data = new Funcoes(); $data1=$data->FormataData($dpedido->pedido_data); ?>
                                                <td class="danger"><?php echo $dpedido->id_pedido; ?></td> 
                                                <td class="danger"><?php echo $data1; ?></td>   
                                                <td class="danger"><?php echo $dpedido->pedido_hora; ?></td>
                                                <td class="danger"><?php echo $dpedido->pessoa_nome; ?></td>
                                               
                                                 <td class="danger"><a class="btn btn-info btn-xs" data-toggle="modal" data-target="#ver_detalhe<?php echo $dpedido->id_pedido; ?>"><i class="fa fa-eye"></i> Detalhes</a></td>
                                                 <td class="danger"><a class="btn btn-warning btn-xs" href="<?php echo base_url('index.php/pedido/entrega-pedido/').$dpedido->id_pedido; ?>"><i class="fa fa-shopping-cart"></i> Entregar</a></td>
                                                  </tr>
                                                   <?php }
                                                if($dpedido->pedido_status=="ENTREGA") { ?>
                                                  <tr>
                                               <td class="warning"><?php echo $dpedido->id_pedido; ?></td> 
                                               <td class="warning"><?php echo $dpedido->pedido_data; ?></td>   
                                               <td class="warning"><?php echo $dpedido->pedido_hora; ?></td>
                                               <td class="warning"><?php echo $dpedido->pessoa_nome; ?></td>
                                               
                                                <td class="warning"><a class="btn btn-info btn-xs" data-toggle="modal" data-target="#ver_detalhe<?php echo $dpedido->id_pedido; ?>"><i class="fa fa-eye"></i> Datalhes</a></td>  
                                                <td class="warning"><a class="btn btn-success btn-xs" data-toggle="modal" href="<?php echo base_url('index.php/pedido/finaliza_venda/').$dpedido->id_pedido; ?>"><i class="fa fa-check"></i> Finalizar</a></td>
                                                  </tr>  
                                                <?php  }}} ?>
                                                
                                                 </tbody>
                                   
                                                <!-- aqui vai a parte da busca no banco de dados view_cliente -->
                                                
                                            </table>
                                           
                                        </div>
                        </div>
                        <!-- /.panel-body -->
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
</div>


 <?php if(!empty($pedido)){
                                                   // var_dump($cliente);
                                                 foreach ($pedido as $dpedido) { ?>
<div class="modal fade" id="ver_detalhe<?php echo $dpedido->id_pedido; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Pedido Nº <?php echo $dpedido->id_pedido; ?></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <?php   $data1 = new Funcoes(); $data2=$data1->FormataData($dpedido->pedido_data); ?>
                                                        <strong>CLIENTE: </strong><?php echo $dpedido->pessoa_nome; ?></br>
                                                        <strong>CELULAR: </strong><?php echo $dpedido->pessoa_celular; ?></br>
                                                        <label>DATA PEDIDO: </label><?php echo $data2; ?></br>
                                                        <strong>HORA PEDIDO: </strong><?php echo $dpedido->pedido_hora; ?></br>
                                                        
                                                       <?php if($dpedido->pedido_status=="PENDENTE"){?>  
                                                        <strong class="danger">STATUS: </strong>PENDENTE PARA ENTREGAR</br>
                                                       <?php }else{ ?>
                                                        <div class="danger"> <strong>STATUS: </strong>A CAMINHO</br></div>
                                                       <?php }?>
                                                        </hr>
                                                        <strong>ESTADO:</strong><?php echo $dpedido->end_estado; ?><br>
                                                         <strong>CIDADE:</strong><?php echo $dpedido->end_cidade; ?><br>
                                                         <strong>BAIRRO:</strong><?php echo $dpedido->bairro_nome; ?><br>
                                                         <strong>RUA:</strong><?php echo $dpedido->rua_nome; ?><br>
                                                         <strong>NUMERO:</strong><?php echo $dpedido->end_rua; ?><br>
                                                    </div>
                                                     <h4 class="panel-title">
                                                         <a data-toggle="collapse" class="btn btn-info btn-xs" data-parent="#accordion" href="#collapseOne<?php echo $dpedido->id_pedido; ?>"><i class="fa fa-eye"></i> PEDIDO</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne<?php echo $dpedido->id_pedido; ?>" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                           <?php  $dados['item']= $this->Mpedido-> itensPedidos("SELECT * from visao_pedido where id_pedido='$dpedido->id_pedido' and pessoa_nome='$dpedido->pessoa_nome'");  ?>
                                        
                                            <table border="1" class="table table-striped table-condensed table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>PRODUTO</th>
                                                                <th>QTD</th>
                                                                <th>VALOR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                
                                               <?php $total=0; foreach ($dados['item'] as $value) {?>
                                                                     
                                                                       
                                                                <td><?php echo $value->produto_nome; ?>  </td>
                                                                <td><?php echo $value->item_qtd; ?></td>
                                                                <td><?php echo number_format($value->item_total,'2',',','.'); ?></td>
                                                               <?php $total+=$value->item_total;?>
                                                              
                                                            </tr>
                                                            
                                               <?php }?>
                                                         <tr>
                                                             <td colspan="3" align="right" class="info"><strong> Total: <?php echo number_format($total,'2',',','.'); ?></strong></td>
                                                            </tr> 
                                                        </tbody>
                                                    </table>

                                        
                                        </div>
                                                </div>
                                                
                                          
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                       
                                                </div>
                                               
                                                
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>
 <?php }} ?>                                 