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
    if (isset($produto_existe) and $produto_existe == 'sim') {
        echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Produto já cadastrado, verifique seu nome na lista!</center>
                            </div>';
    }
    ?>
    <?php
    if (isset($produto_existe) and $produto_existe == 'sucesso') {
        echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Produto Salvo com Sucesso!</center>
                            </div>';
    }
    ?>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form role="form" id="form_produto" enctype="multipart/form-data" action="<?php echo base_url('index.php/produto/salva'); ?>" method="post">

                <!-- add abas criação de novo cliente -->

                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label><center> Dados do Produto</center> </label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Tab panes -->
                                    <div class="form-group">
                                        <label>NOME</label>
                                        <input type="text" class="form-control" required name="txtnome" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['produto_nome'];
                                        }; ?>"  required>
                                    </div>
                                     <div class="form-group">
                                        <label>VALOR UNITÁRIO</label>
                                        <input type="text" class="form-control" required id="unidade" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['produto_valor'];
                                        };?>" name="txtvalor"  required>
                                    </div>
                                    <div class="form-group">
                                        <label>DESCRIÇÃO</label>
                                        <input type="text" class="form-control" name="txtdescri" value="<?php
                                        if (isset($_SESSION['campos'])) {
                                            echo $_SESSION['campos']['produto_descri'];
                                        };?>"  required >
                                            
                                        
                                    </div>    
                                    

                               
                                        
                                    
                                   </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                    </div>
                                </div>
                        
                       
                 
                   
                    
                    <button type="submit"  class="btn btn-success">Salvar</button>
                    <button type="reset" class="btn btn-default">Limpar</button> 
                   
                       
          

            
            </form>
    </div>
       







