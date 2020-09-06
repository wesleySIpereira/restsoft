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

    <form role="form" id="form_cliente" action="<?php echo base_url('index.php/usuario/atualiza/' . $usuario[0]->id_login); ?>" method="post">

        <!-- add abas criação de novo cliente -->

                <div class="row">
        <div class="col-lg-12">
         

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
                                                        <input type="text" class="form-control" value="<?php echo $usuario[0]->login_nome; ?>" name="txtusuario" >
                                                    </div>
                                     <div class="form-group">
                                                        <label>SENHA</label>
                                                        <input type="password" class="form-control"  name="txtsenha" >
                                                    </div>
                                   
                                    <input type="hidden" name="txtidfuncionario" value="<?php echo $usuario[0]->c_idfuncionario; ?>" 
                                <div class="form-group">
                                                        <label>PÉRFIL</label>
                                                        <select  class="form-control"  name="txtperfil" >
                                                            <option selected ><?php echo $usuario[0]->login_tipo;?></option>
                                                            <option>ADMINISTRADOR</option>
                                                            <option>GERENTE</option> 
                                                            <option>USUÁRIO</option> 
                                                        </select>    
                                                    </div>
                                </div>
                           
                                <br>
                                 <div class="form-group">
                                                        <label>STATUS</label>
                                                        <select  class="form-control"  name="txtativo" >
                                                            <option  ><?php echo $usuario[0]->login_status;?></option>
                                                            <option>ATIVO</option>
                                                            <option>DESATIVADO</option> 
                                                            
                                                        </select>    
                                                    </div>
                                   
                                   
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <button type="submit"  class="btn btn-primary">Editar</button>
                    <hr>
                    </form> 

        


     
       
        <hr>
                                
</div>

