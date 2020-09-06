<!--script de validação javascript plugin -->

<script>
    $(function validar() {
        $("#formCliente").validate();
    });
</script>

<!--fim script validação -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subTitulo; ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <?php
    if (isset($cliente_existe) and $cliente_existe == 'sim') {
        echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Cliente já cadastrado, verifique seu nome na lista!</center>
                            </div>';
    }
    ?>
    <?php
    if (isset($cliente_existe) and $cliente_existe == 'sucesso') {
        echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Cliente Salvo com Sucesso!</center>
                            </div>';
    }
    ?>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form role="form" id="form_cliente" action="<?php echo base_url('index.php/caixa/salva'); ?>" method="post">

                <!-- add abas criação de novo cliente -->

                <div class="col-lg-12">


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label><center>MOVIMENTAÇÃO</center> </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-12">   
                                    <div class="form-group">
                                        <label>OBSERVAÇÃO</label>
                                        <input type="text" required class="form-control" name="txtobs" >

                                    </div>
                                    <div class="form-group">
                                        <label>VALOR</label>
                                        <input type="text" id="valor" required class="form-control" name="txtvalor" >

                                    </div>
                                    <div class="form-group">
                                        <label>TIPO</label>
                                        <select name="txttipo" class="form-control" >
                                            <option>SELECIONE</option>
                                            <option>ENTRADA</option>
                                            <option>SAÍDA</option>
                                        </select>

                                    </div>

                                    <!-- /.modal-content -->
                                </div>
                            </div>     
                            <!--MODAL CRIAR NOVO BAIRRO -->   

                            <!-- /.modal-content -->
                        </div>
                    </div>        

                    <!-- Modal -->

                    <!--FIM MODAL NOVO BAIRRO -->     
                    <button type="submit"  class="btn btn-success">Salvar</button>
                    <button type="reset" class="btn btn-default">Limpar</button> 
                </div>
            </form>
            <hr>
        </div>
    </div>

</div>


</div>

</div>
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>



<!-- Add abas de criação de novo cliente -->





</div>

<!-- /.col-lg-6 (nested) -->
</div>
<!-- /.row (nested) -->
</div>
<!-- /.panel-body -->

<!-- /#wrapper -->
<!--modal para criar nova rua -->

<!-- Button trigger modal -->


<!-- /.modal-dialog -->



<!--final -->