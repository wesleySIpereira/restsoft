<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relatórios</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Clientes
                            </div>
                            <div class="panel-body">
                                <p class="text-success"> Total de Clientes Cadastrados: <strong> <?php echo $totalClientes; ?></strong></p>
                                <br>

                            </div>
                            <div class="panel-footer">





                                <a class="btn btn-xs btn-success"   target="_blank" href="<?php echo base_url('index.php/relatorio/rel-cliente'); ?>"><i class="fa fa-1x fa-download"></i> Baixar</a>

                            </div>




                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Pedidos
                            </div>
                            <div class="panel-body">
                                <p class="text-success"> Total de Pedidos: <strong> <?php echo $totalPedido; ?></strong></p>
                                <br>

                            </div>
                            <div class="panel-footer">





                                <a class="btn btn-xs btn-success" target="_blank" href="<?php echo base_url('index.php/relatorio/rel-pedido'); ?>"><i class="fa fa-1x fa-download"></i> Baixar</a>

                            </div>




                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Caixa
                            </div>
                            <div class="panel-body">
                                <p class="text-success"> Total no Caixa: <strong> <?php echo 'R$ ' . number_format($total_caixa, 2, ',', '.'); ?></strong></p>
                                <br>

                            </div>
                            <div class="panel-footer">





                                <a class="btn btn-xs btn-success" target="_blank" href="<?php echo base_url('index.php/relatorio/rel-caixa'); ?>"><i class="fa fa-1x fa-download"></i> Baixar</a>

                            </div>




                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
</div>


<!--
 <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Clientes
                        </div>
                        <div class="panel-body">
                           Total de Clientes Cadastrados: <?php //echo $total;  ?>
                           <br>
                           <a class="btn btn-xs btn-success" href="<?php // echo base_url('index.php/relatorio/rel-cliente');  ?>">Imprimir </a>
                        </div>
                        <div class="panel-footer">
                             
                        
                         
                              
                                    <div class="panel-heading">
                                        <h4 >
                                            <a class="btn btn-primary btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Filtrar</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class=" collapse">
                                       
                                          Filtro para clientes
                                       
                                    </div>
                               
                  
                    
                
                        </div>
                    </div>
                </div> -->