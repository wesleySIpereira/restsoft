<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-center success " >Produtos</h3>
            </div>



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

                    <div class="panel-heading">
                        <div class="search">

                            <a style="right: auto" class="btn btn-success" href="<?php echo base_url('index.php/produto/novo'); ?>"><i class="fa fa-plus-circle"></i> Adicionar</a>



                        </div>
                    </div>
                    <!-- /.panel-heading -->
                   <!-- <div class="table-responsive"> -->
                        <table width="100%" class="table table-striped table-bordered table-hover" id="lista_produtos">
                            <thead>
                                <tr>
                                    <th>Nome Produto</th>
                                    <th>Descrição</th>
                                    <th>Valor Unitário</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($produto)) {
                                    // var_dump($);
                                    foreach ($produto as $dproduto) {
                                        ?>
                                        <tr>
                                            <td><?php echo $dproduto->produto_nome; ?></td> 
                                            <td><?php echo $dproduto->produto_descri; ?></td>   
                                            <td><?php echo "R$ ".$dproduto->produto_valor; ?></td>
                                           
                                            <td><a href="<?php echo base_url('index.php/produto/editar/' . $dproduto->id_produto . '') ?>" title="Editar" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Editar</a>
                                            <td><a href="<?php echo base_url('index.php/produto/excluir/' . $dproduto->id_produto . '') ?>" title="Excluir" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a></td>
        <?php echo '</tr>';
    }
} ?>
                            </tbody>

                            <!-- aqui vai a parte da busca no banco de dados view_cliente -->

                        </table>

              <!--      </div> -->
                    <!-- /.table-responsive -->
<?php //  echo "<div class='paginate_button'>".$links_paginacao."</div>"; ?>

                    <!-- /.panel-body -->


                    <!-- /.panel -->
                </div>

                <!--fim tabela-->
            </div>
            <!-- /.col-lg-12 -->
