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

                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading panel-green">
                            CADASTRAR PEDIDO
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                       
                                </div>
                             </div>
                              <!--  <div class="table-responsive"> -->
                                         <table width="100%" class="table table-striped table-bordered table-hover" id="lista_clientes_pedidos">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>UF</th>
                                        <th>Cidade</th>
                                        <th>Bairro</th>
                                        <th>Rua</th>
                                        <th>Nº</th>
                                        <th>Pedido</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                                if(!empty($cliente)){
                                                   // var_dump($cliente);
                                                 foreach ($cliente as $dcliente) { ?>
                                                <tr>
                                                <td><?php echo $dcliente->nome; ?></td> 
                                                <td><?php echo $dcliente->uf; ?></td>   
                                                <td><?php echo $dcliente->cidade; ?></td>
                                                <td><?php echo $dcliente->nm_bairro; ?></td>
                                                <td><?php echo $dcliente->nm_rua; ?></td>
                                                <td><?php echo $dcliente->rua; ?></td>
                                                <td><a href="<?php echo base_url('index.php/pedido/fazer-pedido/'.$dcliente->id_cliente.'') ?>" title="Cadastrar Pedido" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Fazer Pedido</a></td>
                                               
                                                <?php echo '</tr>'; }} ?>
                                                 </tbody>
                                   
                                                <!-- aqui vai a parte da busca no banco de dados view_cliente -->
                                                
                                            </table>
                                           
                                       <!-- </div> -->
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