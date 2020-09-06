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
<div class="col-lg-12 navbar navbar-default ">
    <br>

    <strong><center>Wesley da Silva Pereira-Neosoft  Email:suporte@neosoft.tk</center></strong>
</div>
<!-- jQuery -->
<script src="<?php echo base_url('application/assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('application/assets/vendor/jquery/jquery.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('application/assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('application/assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('application/assets/dist/js/sb-admin-2.js'); ?>"></script>
<script src="<?php echo base_url('application/assets/js/mascaras.js'); ?>"></script>
<script src="<?php echo base_url('application/assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('application/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('application/assets/vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
<script src="<?php echo base_url('application/assets/js/jquery.validate.js'); ?>"></script>
<script>
    $(document).ready(function () {
        $('#lista_produtos').DataTable({
            "language": {
                "lengthMenu": "Mostrando  _MENU_  registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página  _PAGE_  de  _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "search": "Buscar:",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "paginate": {
                    "first": "<<",
                    "last": ">>",
                    "next": ">",
                    "previous": "<"
                },
                "infoFiltered": "(filtrado de  _MAX_  registros no total)"
            }
        });
    });




</script>
<script>



    function listarRua() {



        $.ajax({
            url: '<?php echo base_url('index.php/cliente/lista_rua'); ?>',
            type: 'POST',
            data: {
                'acao': 'listaRua',
                'bairro': $("#bairro").val(),
                'txtcidade': $("#id_bairro").val()
            },
            success: function (msg) {
                $("#select_rua").html(msg);
            }

        }).done();


    }
    ;
    function salvaRua() {



        $.ajax({
            url: '<?php echo base_url('index.php/cliente/salva_rua'); ?>',
            type: 'POST',
            data: {
                'acao': 'listaRua',
                'bairro': $("#bairro").val(),
                'txtrua': $("#txtrua").val()
            },
            success: function () {
                window.location.href = "<?php echo base_url('index.php/cliente/novo'); ?>";
            }

        }).done();


    }
    ;
   
    
    $("#unidade").mask("99.99"), {placeholder: "___.___.___-__"};
   
    //Plugin mascara baixado do site http://digitalbush.com/projects/masked-input-plugin licença glp
</script>
<script>
    $(function () {
        $("#form_produto").validate();
    });
</script>
<style>
    .error{
        color:#a94442;border-color:#a94442;
    }
</style>

</body>

</html>
