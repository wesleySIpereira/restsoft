<!--script de validação javascript plugin -->

<script>
    $(function validar() {
        $("#form_funcionario").validate();
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
    if (isset($funcionario_existe) and $funcionario_existe == 'sim') {
        echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Funcionário já cadastrado, verifique seu nome na lista!</center>
                            </div>';
    }
    ?>
    <?php
    if (isset($funcionario_existe) and $funcionario_existe == 'sucesso') {
        echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Funcionário Salvo com Sucesso!</center>
                            </div>';
    }
    ?>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form role="form" id="form_funcionario" action="<?php echo base_url('index.php/usuario/salva'); ?>" method="post">

                <!-- add abas criação de novo cliente -->

                <div class="col-lg-12">
           
                   
         
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label><center> LOGIN NO SISTEMA</center> </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                     <div class="form-group">
                                                        <label>USUÁRIO</label>
                                                        <input type="text" class="form-control"  name="txtusuario" >
                                                    </div>
                                     <div class="form-group">
                                                        <label>SENHA</label>
                                                        <input type="password" class="form-control"  name="txtsenha" >
                                                    </div>
                                   
                                    <input type="hidden" name="txtidfuncionario" value="<?php echo $id_usuario; ?>" 
                                <div class="form-group">
                                                        <label>PÉRFIL</label>
                                                        <select  class="form-control"  name="txtperfil" >
                                                            <option>SELECIONE</option>
                                                            <option>ADMINISTRADOR</option> 
                                                            <option>GERENTE</option> 
                                                            <option>USUÁRIO</option> 
                                                        </select>    
                                                    </div>
                                   
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-success">Salvar</button>
                    <button type="reset" class="btn btn-default">Limpar</button> 
                    <hr>
                    </form>                                
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