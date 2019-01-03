<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina y controlador para hacer pruebas de facturacion</title>
</head>
<body>
	<p>Controlador de uso de pruebas de facturacion electronica</p>
	
<?php
//include '../vendor/afipsdk/afip.php/src/Afip.php'; 

$data = $model->fact_a();
/****************************************/
$afip = new Afip(array('CUIT' => 23307295059));

$voucher_info = $afip->ElectronicBilling->GetVoucherInfo(7,1,6); //Devuelve la información del comprobante 1 para el punto de venta 1 y el tipo de comprobante 6 (Factura B)

if($voucher_info === NULL){
    echo 'El comprobante no existe';
    $res = $afip->ElectronicBilling->CreateNextVoucher($data);

	echo $res['CAE']; //CAE asignado el comprobante
echo '</br>'.$res['CAEFchVto']; //Fecha de vencimiento del CAE (yyyy-mm-dd)
echo '</br>'.$res['voucher_number']; //Número asignado al comprobante

}
else{
    echo 'Esta es la información del comprobante: De Recibos';
    echo '<pre>';
    print_r($voucher_info);
    echo '</pre>';
}

/*
$res = $afip->ElectronicBilling->CreateNextVoucher($data);

echo $res['CAE']; //CAE asignado el comprobante
echo '</br>'.$res['CAEFchVto']; //Fecha de vencimiento del CAE (yyyy-mm-dd)
echo '</br>'.$res['voucher_number']; //Número asignado al comprobante


$voucher_types = $afip->ElectronicBilling->GetVoucherTypes();
echo 'Obtener tipos de comprobantes disponibles</br><pre>';
//echo'</pre>';

$concept_types = $afip->ElectronicBilling->GetConceptTypes();//conceptos disponibles

  echo 'Obtener tipos de conceptos disponibles</br><pre>';
 // print_r($concept_types);
  echo '</pre>';

 $aloquot_types = $afip->ElectronicBilling->GetAliquotTypes();
   echo '<pre>';
  print_r($aloquot_types);
  echo '</pre>';

  $option_types = $afip->ElectronicBilling->GetOptionsTypes();
  echo '<pre>';
  print_r($option_types);
  echo '</pre>';
  
  
  $server_status = $afip->ElectronicBilling->GetServerStatus();

echo 'Este es el estado del servidor:';
echo '<pre>';
print_r($server_status);
echo '</pre>';

$last_voucher = $afip->ElectronicBilling->GetLastVoucher(1,6);
echo '<pre> Este es el numero del ultimo comprobante';
print_r($last_voucher);
echo'</pre></br>';
  */
/************************************/


  ?>
	 
</body>
</html>
