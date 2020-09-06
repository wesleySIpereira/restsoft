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
            <form role="form" id="form_funcionario" action="<?php echo base_url('index.php/funcionario/salva'); ?>" method="post">

                <!-- add abas criação de novo cliente -->

                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label><center> Endereço</center> </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Tab panes -->
                                    <div class="form-group">
                                        <label>ESTADO</label>
                                        <input type="text" class="form-control" required name="txtestado"  value="MG" disabled >
                                    </div>
                                    <div class="form-group">
                                        <label>CIDADE</label>
                                        <input type="text" class="form-control"  name="txtcidade"  value="PATROCINIO" disabled >
                                    </div>
                                    <div class="form-group">
                                        <label>BAIRRO</label>
                                        <select class="form-control" name="txtbairro" id="bairro" required onchange="listarRua()">
                                            <option selected>Selecione</option>
                                            <?php
                                            foreach ($bairro as $bbairro) {
                                                echo "<option value='" . $bbairro->id_bairro . "'>" . $bbairro->bairro_nome . "</option>";
                                            }
                                            ?>

                                        </select>
                                        <br><a class="btn btn-success btn-xl" data-toggle="modal" data-target="#novo_bairro">Adicionar Bairro</a>
                                    </div>    
                                    <div class="form-group" id="select_rua">

                                    </div>
                                    <div class="form-group">
                                        <label>NUMERO</label>
                                        <input type="text" class="form-control" id="txtnumero" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['txtnumero'];
                                        };
                                        ?>" required name="txtnumero" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label><center> Dados Pessoais</center> </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">                        
                                    <div class="form-group">
                                        <label>NOME</label>
                                        <input class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_nome'];
                                        };
                                        ?>"  name="txtnome" required>

                                    </div>
                                    <div class="form-group">
                                        <label>DATA DE NASCIMENTO</label>
                                        <input class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_nascimento'];
                                        };
                                        ?>" required type="text" placeholder="__/__/____" name="txtdatanascimento" id="datanascimento">
                                    </div>
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input type="text" class="form-control"  value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_cpf'];
                                        };
                                        ?>" placeholder="___.___.___-__" name="txtcpf" id="cpf" >
                                    </div>
                                    <div class="form-group">
                                        <label>RG</label>
                                        <input type="text" class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_rg'];
                                        };
                                        ?>"   name="txtrg" id="rg" >
                                    </div>
                                    <div class="form-group">
                                        <label>MÃE</label>
                                        <input type="text" class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_mae'];
                                        };
                                        ?>" required  name="txtmae"  >
                                    </div>
                                    <div class="form-group">
                                        <label>PAI</label>
                                        <input type="text" class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_pai'];
                                        };
                                        ?>" required  name="txtpai"  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label><center>DADOS PARA CONTATO</center> </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">   
                                    <div class="form-group">
                                        <label>E-MAIL</label>
                                        <input  class="form-control" required type="email" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_email'];
                                        };
                                        ?>"  name="txtemail" placeholder="exemplo@email.com"  >
                                    </div>
                                    <div class="form-group">
                                        <label>CELULAR</label>
                                        <input type="text" class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_celular'];
                                        };
                                        ?>" required placeholder="(__)-____-____" name="txtcelular" id="celular"  >
                                    </div>
                                    <div class="form-group">
                                        <label>TELEFONE</label>
                                        <input type="text" required class="form-control" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['pessoa_telefone'];
                                        };
                                        ?>" placeholder="(__)-____-____"  name="txttelefone" id="telefone"  >
                                    </div>

                                    <div class="modal fade" id="nova_rua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Adicionar Rua</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>RUA</label>
                                                        <input type="text" class="form-control"  id="txtrua" >
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                    <a onclick="salvaRua()" class="btn btn-primary">Salvar</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>     
                                    <!--MODAL CRIAR NOVO BAIRRO -->   
                                    <div class="modal fade" id="novo_bairro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Adicionar Bairro</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>BAIRRO</label>
                                                        <input type="text" class="form-control"  id="txtbairro" >
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                    <a onclick="salvaBairro()" class="btn btn-primary">Salvar</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>        

                                    <!-- Modal -->

                                    <!--FIM MODAL NOVO BAIRRO -->           

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