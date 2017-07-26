<!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header text-center success " >Clientes</h3>
                        </div>
                        <!--Tablela simples -->
                        <div class="row">
                            <div class="col-lg-12">

                               
                                    <div class="panel-heading">
                                        <div class="search">
                                         
                                            <a style="right: auto" class="btn btn-success" href="<?php echo base_url('index.php/cliente/novo'); ?>"><i class="fa fa-plus-circle"></i> Adicionar</a>
                                            
                                        
                                            
                                    </div>
                                        </div>
                                         <!-- /.panel-heading -->
                                         <div class="table-responsive">
                                         <table width="100%" class="table table-striped table-bordered table-hover" id="lista_clientes">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>UF</th>
                                        <th>Cidade</th>
                                        <th>Bairro</th>
                                        <th>Rua</th>
                                        <th>Nº</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
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
                                                <td><a href="<?php echo base_url('index.php/cliente/editar/'.$dcliente->id_cliente.'') ?>" title="Editar" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editar</a></td>
                                                <td><a href="<?php echo base_url('index.php/cliente/excluir/'.$dcliente->id_cliente.'') ?>" title="Excluir" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a></td>
                                                <?php echo '</tr>'; }} ?>
                                                </tbody>
                                   
                                                <!-- aqui vai a parte da busca no banco de dados view_cliente -->
                                                
                                            </table>
                                           
                                        </div>
                                        <!-- /.table-responsive -->
                                        <?php //  echo "<div class='paginate_button'>".$links_paginacao."</div>";?>
                                    
                                    <!-- /.panel-body -->
                                       
                               
                                <!-- /.panel -->
                            </div>
                            
                            <!--fim tabela-->
                        </div>
                        <!-- /.col-lg-12 -->
