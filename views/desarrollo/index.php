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
$data = array(
	'CantReg' 		=> 1, // Cantidad de comprobantes a registrar
	'PtoVta' 		=> 1, // Punto de venta
	'CbteTipo' 		=> 6, // Tipo de comprobante (ver tipos disponibles) 
	'Concepto' 		=> 1, // Concepto del Comprobante: (1)Productos, (2)Servicios, (3)Productos y Servicios
	'DocTipo' 		=> 80, // Tipo de documento del comprador (ver tipos disponibles)
	'DocNro' 		=> 20111111112, // Numero de documento del comprador
	'CbteDesde' 	=> 1, // Numero de comprobante o numero del primer comprobante en caso de ser mas de uno
	'CbteHasta' 	=> 1, // Numero de comprobante o numero del ultimo comprobante en caso de ser mas de uno
	'CbteFch' 		=> intval(date('Ymd')), // (Opcional) Fecha del comprobante (yyyymmdd) o fecha actual si es nulo
	'ImpTotal' 		=> 121, // Importe total del comprobante
	'ImpTotConc' 	=> 0, // Importe neto no gravado
	'ImpNeto' 		=> 100, // Importe neto gravado
	'ImpOpEx' 		=> 0, // Importe exento de IVA
	'ImpIVA' 		=> 21, //Importe total de IVA
	'ImpTrib' 		=> 0, //Importe total de tributos
	'FchServDesde' 	=> NULL, // (Opcional) Fecha de inicio del servicio (yyyymmdd), obligatorio para Concepto 2 y 3
	'FchServHasta' 	=> NULL, // (Opcional) Fecha de fin del servicio (yyyymmdd), obligatorio para Concepto 2 y 3
	'FchVtoPago' 	=> NULL, // (Opcional) Fecha de vencimiento del servicio (yyyymmdd), obligatorio para Concepto 2 y 3
	'MonId' 		=> 'PES', //Tipo de moneda usada en el comprobante (ver tipos disponibles)('PES' para pesos argentinos) 
	'MonCotiz' 		=> 1, // Cotización de la moneda usada (1 para pesos argentinos)  
	'CbtesAsoc' 	=> array( // (Opcional) Comprobantes asociados
		array(
			'Tipo' 		=> 991, // Tipo de comprobante (ver tipos disponibles) 
			'PtoVta' 	=> 1, // Punto de venta
			'Nro' 		=> 1, // Numero de comprobante
			'Cuit' 		=> 23307295059 // (Opcional) Cuit del emisor del comprobante
			)
		),
	'Tributos' 		=> array( // (Opcional) Tributos asociados al comprobante
		array(
			'Id' 		=>  99, // Id del tipo de tributo (ver tipos disponibles) 
			'Desc' 		=> 'Ingresos Brutos', // (Opcional) Descripcion
			'BaseImp' 	=> 100, // Base imponible para el tributo
			'Alic' 		=> 0, // Alícuota
			'Importe' 	=> 0 // Importe del tributo
		)
	), 
	'Iva' 			=> array( // (Opcional) Alícuotas asociadas al comprobante
		array(
			'Id' 		=> 5, // Id del tipo de IVA (ver tipos disponibles) 
			'BaseImp' 	=> 100, // Base imponible
			'Importe' 	=> 21 // Importe 
		)
	), 
	'Opcionales' 	=> array( // (Opcional) Campos auxiliares
		array(
			'Id' 		=> 17, // Codigo de tipo de opcion (ver tipos disponibles) 
			'Valor' 	=> 2 // Valor 
		)
	), 
	'Compradores' 	=> array( // (Opcional) Detalles de los clientes del comprobante 
		array(
			'DocTipo' 		=> 80, // Tipo de documento (ver tipos disponibles) 
			'DocNro' 		=> 30729505, // Numero de documento
			'Porcentaje' 	=> 100 // Porcentaje de titularidad del comprador
		)
	)
);
/****************************************/
$afip = new Afip(array('CUIT' => 23307295059));





$voucher_types = $afip->ElectronicBilling->GetVoucherTypes();
echo 'Obtener tipos de comprobantes disponibles<br><pre>';
print_r($voucher_types);
echo'</pre>';

$concept_types = $afip->ElectronicBilling->GetConceptTypes();//conceptos disponibles

  echo 'Obtener tipos de conceptos disponibles<br><pre>';
  print_r($concept_types);
  echo '<pre>';

 $aloquot_types = $afip->ElectronicBilling->GetAliquotTypes();
   echo '<pre>';
  print_r($aloquot_types);
  echo '<pre>';

  $option_types = $afip->ElectronicBilling->GetOptionsTypes();
  echo '<pre>';
  print_r($option_types);
  echo '<pre>';
  
  
  $server_status = $afip->ElectronicBilling->GetServerStatus();

echo 'Este es el estado del servidor:';
echo '<pre>';
print_r($server_status);
echo '</pre>';

$last_voucher = $afip->ElectronicBilling->GetLastVoucher(1,6);
echo '<pre>';
print_r($last_voucher);
echo'</pre<';
  
/************************************/
$res="vacio";
//$res=$afip->ElectronicBilling->CreateVoucher($data);
echo '<pre>';
	print_r($res);
echo '</pre>';

  ?>
	 
</body>
</html>
