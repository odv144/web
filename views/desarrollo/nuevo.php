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


/************************************/

   
   // Yii::$app->end();
    

    $info_cuit= $afip->RegisterScopeFive->GetTaxpayerDetails(20179173108);
    $info_cuit2= $afip->RegisterScopeFour->GetTaxpayerDetails(20179173108);
    
    echo 'Esta es la información del contribuyente:';
    echo '<pre>';
    print_r($info_cuit);
    print_r($info_cuit2);
  
    echo '</pre>';
    //$info_cuit2= file_get_contents($info_cuit2);

   echo $info_cuit2->actividad[0]->descripcionActividad;
    //echo($respuesta);echo('</br>');
    

    /*
    $cuit = '23307295059';
   
    $buscar = 'https://awshomo.afip.gov.ar/sr-padron/webservices/personaServiceA4'.$cuit;
    $respuesta = file_get_contents($buscar);
    
    echo($respuesta);echo('</br>');
    echo('=================================================================');echo('</br>');
    $respuesta = json_decode($respuesta);
    // Leer provincias en base al codigo fiscarl.
    echo("nombre : ".$respuesta->data->nombre);echo('</br>');
    echo("direccion : ".$respuesta->data->domicilioFiscal->direccion);echo('</br>');
    echo("cp : ".$respuesta->data->domicilioFiscal->codPostal);echo('</br>');
    echo("prov : ".$respuesta->data->domicilioFiscal->idProvincia);echo('</br>');
    // Impuestos inscriptos
    $tabla = $respuesta->data->impuestos;
    $elementos = count ($tabla);
    for($i=0;$i<$elementos;$i++){
        echo('Impuesto = '.$respuesta->data->impuestos[$i]);echo('</br>');
    }
    */

  ?>
     
</body>
</html>
