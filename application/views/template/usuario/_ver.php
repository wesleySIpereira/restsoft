<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-center success " >Criar Usuário</h3>
            </div>



            <!--Tablela simples -->
            <div class="row">
                <div class="col-lg-12">
                    <?php if (isset($criado_user)and $criado_user == 'sim') { ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Usuário Adicionado!</center>
                        </div>
                    <?php } ?>
                    <?php if (isset($deletado)and $deletado == 'sim') { ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                            <center> Fucionário Deletado!</center>
                        </div>
                    <?php } ?>

                    <div class="panel-heading">
                        <div class="search">

                          <!--  <a style="right: auto" class="btn btn-success" href="<?php echo base_url('index.php/funcionario/novo'); ?>"><i class="fa fa-plus-circle"></i> Adicionar</a> -->



                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="lista_funcionarios">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>USUÁRIO</th>
                                    <th>PERMIÇÃO</th>
                                    <th>PERFIL</th>
                                    <th>STATUS</th>
                                    <th>EDITAR</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                              
                                if (!empty($usuario)) {
                                    // var_dump($);
                                    foreach ($usuario as $dusuario) {
                                        ?>
                                        <tr>
                                            <td><?php echo $dusuario->id_login; ?></td> 
                                            <td><?php echo $dusuario->login_nome; ?></td>   
                                            <td><?php echo $dusuario->login_permicao; ?></td>
                                            <td><?php echo $dusuario->login_tipo; ?></td>
                                            <td><?php echo $dusuario->login_status; ?></td>
                                            
                                            <td><a href="<?php echo base_url('index.php/usuario/editar/' . $dusuario->id_login . '') ?>" title="Criar" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Criar Usuário</a>
                                          
        <?php echo '</tr>';
    }
} ?>
                            </tbody>

                            <!-- aqui vai a parte da busca no banco de dados view_cliente -->

                        </table>

                    </div>
                    <!-- /.table-responsive -->
<?php //  echo "<div class='paginate_button'>".$links_paginacao."</div>"; ?>

                    <!-- /.panel-body -->


                    <!-- /.panel -->
                </div>

                <!--fim tabela-->
            </div>
            <!-- /.col-lg-12 -->
