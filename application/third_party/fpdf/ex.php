<?php
require('html2pdf.php');

if(isset($_POST['text']))
{
	$pdf=new PDF_HTML();
	$pdf->SetFont('Arial','',12);
	$pdf->AddPage();
	$pdf->WriteHTML($_POST['text']);
	$pdf->Output();
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>HTML2PDF</title>
<style type="text/css">
input, textarea {
	font-family: lucida console;
	font-size: 9pt;
	border: 1px solid #B0B0B0;
}
body {
	font-family: lucida console;
	font-size: 9pt;
	background-color: #F0F0F0;
}
</style>
</head>
<body>
<h1>HTML2PDF</h1>
<div style="border: 1px solid black">
Supported tags are the following:
<ul type="square">
<li>&lt;br&gt; and &lt;p&gt;</li>
<li>&lt;b&gt;, &lt;i&gt; and &lt;u&gt;</li>
<li>&lt;img&gt; (src and width (or height) are mandatory)</li>
<li>&lt;a&gt; (href is mandatory)</li>
<li>&lt;font&gt;: possible attributes are
<ul>
<li>color: hex color code</li>
<li>face: available fonts are: arial, times, courier, helvetica, symbol</li>
</ul>
</li>
</ul>
To display these tags without interpreting them, use &amp;lt; and &amp;gt;
</div><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_blank">
Content:<br>
<textarea name="text" cols="80" rows="15"></textarea><br><br>
<input type="submit" value="Generate PDF">
</form>
</body>
</html>
