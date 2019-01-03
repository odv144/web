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

/****************************************/
$afip = new Afip(array('CUIT' => 23307295059));
$voucher_info = $afip->ElectronicBilling->GetVoucherInfo(7,1,6); //Devuelve la información del comprobante 1 para el punto de venta 1 y el tipo de comprobante 6 (Factura B)

    echo 'Informacion reference al contribuyente';
    echo '<pre>';
    print_r($taxpayer_details);
    echo '</pre>';



/************************************/


  ?>
     
</body>
</html>
