</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('application/assets/vendor/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('application/assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('application/assets/vendor/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('application/assets/dist/js/sb-admin-2.js');?>"></script>
 <script> 
     

              function listaCidade() {

                    $.ajax({
                        url: '<?php echo base_url('index.php/clientes/listar-cidade'); ?>',
                        type: 'POST',
                        data: {
                            'acao': 'listaCidade',
                            'estado': $("#estado").val()
                        },
                        success: function (msg) {
                            $("#selectBairro").html(msg);
                        }

                    }).done();

};
       function listarBairro() {

                  

                    $.ajax({
                        url: '<?php echo base_url('index.php/clientes/listar-bairro'); ?>',
                        type: 'POST',
                        data: {
                            'acao': 'listaCidade',
                            'cidade': $("#cidade").val(),
                            'txtcidade':$("#id_bairro").val()
                        },
                        success: function (msg) {
                            $("#selectEnd").html(msg);
                        }

                    }).done();

                
            };
         $("#dataNascimento").mask("99/99/9999",{placeholder:"__/__/__"});
         $("#cpf").mask("999.999.999-99",{placeholder:"___.___.___-__"});
         $("#celular").mask("(99)-9 9999-9999");
         $("#telefone").mask("(99)-9999-9999");
         //Plugin mascara baixado do site http://digitalbush.com/projects/masked-input-plugin licença glp
        </script>
        
</body>

</html>
