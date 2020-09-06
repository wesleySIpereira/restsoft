

<body style="background-color:#373f42;color:#FFF">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
  
                    <div class="panel-heading">
                        <h3 class="panel-title">Logar no Sistema</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url('index.php/login/entrar'); ?> " method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="txtuser" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="txtsenha" type="password" value="">
                                </div>
                                <hr>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit"  class="btn btn-lg btn-primary btn-block" value="Entrar">
                            </fieldset>
                        </form>
                    </div>
                </div>
                                  <?php
    if (isset($erro_login) and $erro_login == 'sim') {
        echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Usuário ou Senha incorretos !</center>
                            </div>';
    }
    ?>
                    <?php
    if (isset($logar) and $logar == 'permicao') {
        echo '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-remove"></i> </button>
                                <center> Seu usuário está desativado contate o administrador do sistema !</center>
                            </div>';
    }
    ?>
            </div>
        </div>
    </div>
    
    
    