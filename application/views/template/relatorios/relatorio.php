<?php

if(isset($acao)){
    
switch ($acao) {
    case 'lista_clientes':
    $pdf = new FPDF();
$pdf->SetMargins(20,5,10,20);
$pdf->Cell(120);
$dados['cliente'] = $this->Mcliente->listaClientes();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
 $pdf->Cell(0,5,'CLIENTES CADASTRADOS',0,0,'C');
$pdf->Cell(0,1,'Pagina. '.$pdf->PageNo().'/{nb}',0,0,'R');
$pdf->Ln(15);
$pdf->Ln();
 $pdf->SetFont('Arial','B',8,'C');
 $pdf->Cell(4,5,'ID',1,'C');
  $pdf->Cell(40,5,'NOME',1,'C');
  $pdf->Cell(5,5,'UF',1);
  $pdf->Cell(20,5,'CIDADE',1);
  $pdf->Cell(40,5,'BAIRRO',1);
  $pdf->Cell(40,5,'RUA',1);
  $pdf->Cell(10,5, utf8_decode('Nº'),1);
 $pdf->Ln();
 $total=0;

foreach ($dados['cliente'] as $value) {
  $pdf->SetFont('Arial','',5);
  
  $pdf->Cell(4,4,$value->id_cliente,1,false);  
  $pdf->Cell(40,4,$value->nome,1,false);
    $pdf->Cell(5,4,$value->uf,1,false);
  $pdf->Cell(20,4,$value->cidade,1,false);
    $pdf->Cell(40,4, utf8_decode($value->nm_bairro),1,false);
      $pdf->Cell(40,4, utf8_decode($value->nm_rua),1,false);
      $pdf->Cell(10,4,$value->rua,1,false);
      $pdf->Ln();
      $total++;
}   $pdf->SetFont('Arial','B',8);
    $pdf->Cell(159,4,'CLIENTES TOTAL:'.$total,1,1,'R',false);
//$pdf->Cell(40,10,'Hello World!');
$pdf->AliasNbPages(); 
$pdf->Output('rel_clientes.pdf','I');
$pdf->Close();

        break;
    case 'lista_pedidos':
 $pdf = new FPDF();
//$pdf->SetMargins(5,5,10,5);
$pdf->Cell(120);
$dados['pedido'] = $this->Mpedido->visualizaPedido("SELECT * FROM `tb_pedido`,tb_cliente,tb_pessoa,tb_endereco,tb_rua,tb_bairro where c_idcliente=id_cliente and c_idpessoa=id_pessoa and c_idendereco=id_endereco and c_idrua=id_rua and c_idbairro=id_bairro");
$pdf->AddPage();
$pdf->SetAuthor('WPSISTEMAS',true);
$pdf->SetFont('Arial','B',15);
 $pdf->Cell(0,5,utf8_decode('Relatório de Pedidos'),0,0,'C');
 $pdf->SetFont('Arial','B',6);
$pdf->Cell(0,1,'Pagina. '.$pdf->PageNo().'/{nb}',0,0,'R');
$pdf->Ln(15);
$pdf->Ln('C');                                   
$pdf->SetFont('Arial','B',9);
  $pdf->Cell(40,4,'ID CLIENTE',0,0,'C');  
  $pdf->Cell(40,4,'DATA DO PEDIDO',0,0,'C',false);
    $pdf->Cell(40,4,'HORA DO PEDIDO',0,0,'C',false);
  $pdf->Cell(40,4,'NOME CLIENTE',0,0,'C',false);
  $pdf->Cell(25,4,'STATUS PEDIDO',0,0,'C',false);
  $pdf->Line(1,1,1,1);
  
 $pdf->Ln(4);
 $total=0;
 $pagina=0;
 $finalizado=0;
 $parado=0;
 $caminho=0;
foreach ($dados['pedido'] as $value) {
 if($value->pedido_status=='PENDENTE')
     {
        $parado++;
     }
 if($value->pedido_status=='FINALIZADO')
     {
        $finalizado++;
     }
  if($value->pedido_status=='ENTREGA')
     {
        $caminho++;
     }   
 if($pagina==41)
     { 
    $pdf->AddPage(); 
  $pdf->SetFont('Arial','B',15);
 $pdf->Cell(0,5,utf8_decode('Relatório de Pedidos'),0,0,'C');
 $pdf->SetFont('Arial','B',6);
$pdf->Cell(0,1,'Pagina. '.$pdf->PageNo().'/{nb}',0,0,'R');
$pdf->Ln(15);
$pdf->Ln('C');                                   
$pdf->SetFont('Arial','B',9);
  $pdf->Cell(40,4,'ID CLIENTE',0,0,'C');  
  $pdf->Cell(40,4,'DATA DO PEDIDO',0,0,'C',false);
    $pdf->Cell(40,4,'HORA DO PEDIDO',0,0,'C',false);
  $pdf->Cell(40,4,'NOME CLIENTE',0,0,'C',false);
  $pdf->Cell(25,4,'STATUS PEDIDO',0,0,'C',false);
  $pdf->Line(1,1,1,1);
 
  
 $pdf->Ln(4);
       
        $pagina=0;
     } 
     $pagina++;
      $total++;
       $pdf->SetFont('Arial','',9);
   $data = new Funcoes(); $data1=$data->FormataData($value->pedido_data);
  $pdf->Cell(40,6,$value->id_cliente,1,0,'C');  
  $pdf->Cell(40,6,$data1,1,0,'C');
    $pdf->Cell(40,6,$value->pedido_hora,1,0,'C');
  $pdf->Cell(40,6,$value->pessoa_nome,1,0,'C');
  $pdf->Cell(25,6,$value->pedido_status,1,0,'C');
  
  
      $pdf->Ln();
      
}   $pdf->SetFont('Arial','B',9);
   $pdf->SetFillColor(232,232,232);
   $pdf->SetTextColor(0,0,0);
    $pdf->Cell(185,7,'TOTAL : '.$total. '            FINAZADAS: '.$finalizado. '          ENTREGANDO: '.$caminho.'         PENDENTES: '.$parado,'B',1,'C',false);
//$pdf->Cell(40,10,'Hello World!');
$pdf->AliasNbPages(); 

$pdf->Output('rel_pedidos.pdf','I');
$pdf->Close();

        break;
    

    default:
        show_404();
        break;
}

}
?>