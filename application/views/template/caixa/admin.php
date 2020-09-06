<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header text-center success " >Caixa</h3>
                        </div>
                        
                      
                        
                        <!--Tablela simples -->
                        <div class="row">
                            <div class="col-lg-12">
                                  <?php  if(isset($sem_saldo)and $sem_saldo=='sim'){?>
                       <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center><i class="fa fa-2x fa-warning"></i>   Saldo Insuficiente!</center>
                            </div>
                        <?php  } ?>
                                     <?php  if(isset($mov)and $mov=='sim'){?>
                       <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Entrada no Caixa cadastrada !</center>
                            </div>
                        <?php  } ?>
                               
                                    
                                         <!-- /.panel-heading -->
                                        <!-- <div class="table-responsive"> -->
                                         <table width="100%" class="table table-striped table-bordered table-hover" id="lista_caixa">
                                <thead>
                                    <tr>
                                        <th>TIPO MOVIMENTAÇÃO</th>
                                        <th>DATA</th>
                                        <th>HORA</th>
                                        <th>VALOR</th>
                                        <th>VER</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $total=0;         
                                    if(!empty($caixa)){
                                                   // var_dump($cliente);
                                                 foreach ($caixa as $dcaixa) { ?>
                                                <tr>
                                                <?php   $data = new Funcoes(); $data1=$data->FormataData($dcaixa->caixa_data); ?>
                                                <td><?php echo $dcaixa->caixa_mov; ?></td> 
                                                <td><?php echo $data1; ?></td>   
                                                <td><?php echo $dcaixa->caixa_hora; ?></td>
                                                <td><?php echo 'R$ '.number_format($dcaixa->caixa_valor,2,',','.'); ?></td>
                                                <td><a class="btn btn-info btn-xs" data-toggle="modal" data-target="#ver_detalhe<?php echo $dcaixa->id_caixa; ?>"><i class="fa fa-1x fa-eye"></i> Ver</a></td>
                                                <?php if($dcaixa->caixa_mov=='SAÍDA'){ $total-=$dcaixa->caixa_valor;} ?>
                                                <?php if($dcaixa->caixa_mov=='ENTRADA'){ $total+=$dcaixa->caixa_valor;} ?>
                                                <?php echo '</tr>'; }} ?>
                                                </tbody>
                                   
                                                <!-- aqui vai a parte da busca no banco de dados view_cliente -->
                                                
                                            </table>
                                           
                                       <!-- </div> -->
                                        <!-- /.table-responsive -->
                                        <?php //  echo "<div class='paginate_button'>".$links_paginacao."</div>";?>
                                        <hr>
                                                <div  <div class="alert alert-success">
                                                        <h4> SALDO:  <?php   echo 'R$ '. number_format($total,2,',','.');?></h4></div>     
                                            
                                        
                                    <!-- /.panel-body -->
                                       
                               
                                <!-- /.panel -->
                            </div>
                            
                            <!--fim tabela-->
                        </div>
                       
                                            <a style="right: auto" class="btn btn-success" href="<?php echo base_url('index.php/caixa/entrada'); ?>"><i class="fa fa-plus-circle"></i> Movimentar</a>
                                            
                                            <hr>
                                            
                                 
                                        
                        <!-- /.col-lg-12 -->
<!--  modal para mostrar detalhes da movimentação -->
<?php if(!empty($caixa)){
                                                   // var_dump($cliente);
                                                 foreach ($caixa as $dcaixa) { ?>
<div class="modal fade" id="ver_detalhe<?php echo $dcaixa->id_caixa; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Movimentação Nº <?php echo $dcaixa->id_caixa; ?></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <strong>TIPO MOVIMENTAÇÃO: </strong><?php echo $dcaixa->caixa_mov; ?></br>
                                                        <strong>DATA: </strong><?php echo $dcaixa->caixa_data; ?></br>
                                                        <strong>HORA: </strong><?php echo $dcaixa->caixa_hora; ?></br>
                                                        <strong>OBSERVAÇÃO: </strong><?php echo $dcaixa->caixa_obs; ?></br>
                                                        <strong>FUNCIONÁRIO: </strong><?php echo $dcaixa->caixa_func; ?></br>
                                                        <strong>VALOR MOVIMENTADO:</strong> <?php echo 'R$ '.number_format($dcaixa->caixa_valor,2,',','.'); ?>
                                                    </div>   
                                                   <?php if ($dcaixa->c_idpedido<>null){ ?>
                                                   <!--fazer visualizar pedido teste -->
                                          <h4 class="panel-title">
                                                         <a data-toggle="collapse" class="btn btn-info btn-xs" data-parent="#accordion" href="#collapseOne<?php echo $dcaixa->c_idpedido; ?>"><i class="fa fa-eye"></i> PEDIDO</a>
                                        </h4>          
                                                   
                                         <div id="collapseOne<?php echo $dcaixa->c_idpedido; ?>" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                           <?php  $dados['item']= $this->Mpedido->itensPedidos("SELECT * from visao_pedido where id_pedido='$dcaixa->c_idpedido' ");  ?>
                                        
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
                                                   
                                                   <?php }?>  
                                        
                                        </div>
                                                
                                                
                                          
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                       
                                                </div>
                                               </div>
                                                
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
</div>
<?PHP }} ?>