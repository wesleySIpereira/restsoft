<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $Titulo; ?>">
    <meta name="author" content="wsysdata">

   <title><?php echo $Titulo; ?></title>

    <!-- Bootstrap Core CSS -->
    <?php echo link_tag(base_url('application/assets/vendor/bootstrap/css/bootstrap.min.css'));?> 

    <!-- MetisMenu CSS -->
    <?php echo link_tag(base_url('application/assets/vendor/metisMenu/metisMenu.min.css'));?> 

    <!-- Custom CSS -->
    <?php echo link_tag(base_url('application/assets/dist/css/sb-admin-2.css'));?>
    <?php echo link_tag(base_url('application/assets/vendor/datatables-plugins/dataTables.bootstrap.css')); ?>
    <?php echo link_tag(base_url('application/assets/vendor/datatables-responsive/dataTables.responsive.css')); ?>
    <!-- Custom Fonts -->
     <?php echo link_tag(base_url('application/assets/vendor/font-awesome/css/font-awesome.min.css'));?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <!--script de validação -->
 <script>
	// only for demo purposes
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted! (skipping validation for cancel button)");
		}
	});

	$().ready(function() {
		$("#form_cliente").validate({
			errorLabelContainer: $("#form_cliente div.error")
		});

		var container = $('div.container');
		// validate the form when it is submitted
		var validator = $("#form2").validate({
			errorContainer: container,
			errorLabelContainer: $("ol", container),
			wrapper: 'li'
		});

		$(".cancel").click(function() {
			validator.resetForm();
		});
	});
	</script>
</head>

<body onload="initialize()">
