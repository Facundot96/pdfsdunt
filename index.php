<?php
if($_POST){
    require_once __DIR__ . '/vendor/autoload.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $calle = $_POST['calle'];
    $titulo = 'Solicitud de Constancia de No Percepción de Salario Familiar';
    $dir = 'Dirección de pruebas';
    $fecha = date('d-m-Y');
    $nroDoc = '39674323';
    $nacionalidad = 'argentina';
    $nroLegajo = '001';
    $cuit = '20396743230';
    $fijo = '4503247';
    $cel = '3875060018';
    $email = 'facundotapia.96@gmail.com';
    $numDir = '662';
    $piso = '9';
    $dpto = 'c';
    $local = "San Miguel de Tucumán";
    $prov = "Tucumán";







    $mpdf = new \Mpdf\Mpdf([
        'debug' => true,
        'allow_output_buffering' => true
    ]);
    //$mpdf->WriteHTML('<h1>'. $titulo . ' </h1>
    //<h2>Nombre: '. $nombre .'</h2>
    //<h2>Apellido: '. $apellido .'</h2>
    //<h2>dirección: '. $direccion .'</h2>');
    /*$mpdf ->WriteHTML('<table style="border-collapse: collapse; width: 80%; height: 10%; margin-left: auto; margin-right: auto;" border="0.5em" cellpadding="5%">
    <tbody>
    <tr>
    <td style="height: 4em; width: 11.9198%;"><strong>UNIVERSIDAD NACIONAL DE TUCUM&Aacute;N</strong></td>
    <td style="width: 60.1621%;">
    <h3><span style="font-size: 18pt;">'.$titulo.'</span></h3>
    <h4>'.$dir.'</h4>
    </td>
    <td style="width: 29%;">
    <p>FECHA</p>
    </td>
    </tr>
    </tbody>
    </table>');*/

    

    $mpdf ->WriteHTML('<table border="1" style="height: 49px; width: 80%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
    <tbody>
    <tr style="height: 18px;">
    <td style="width: 13.4389%; height: 49px;"><strong><img src="https://appserver.facet.unt.edu.ar/mesaentradas/assets/image/escudount.png" alt="" width="100" height="100" /></strong></td>
    <td style="width: 69.777%; height: 49px;">
    <h3 style="text-align: center;"><span style="font-size: 18pt;">&nbsp;'.$dir.'</span></h3>
    <h4 style="text-align: center;">'.$titulo.'</h4>
    </td>
    <td style="width: 16.784%; height: 49px; text-align: center;">'.$fecha.'</td>
    </tr>
    </tbody>
    </table>
    <p style="text-align: center;"><b>Datos Peticionante</b></p>
    <table border="1" style="height: 78px; width: 80%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
    <tbody>
    <tr style="height: 37px;">
    <td style="width: 27.4432%; height: 37px;">&nbsp;Nombre:</td>
    <td style="width: 72.5568%; height: 37px; text-align: left;">&nbsp;'.$nombre.'</td>
    </tr>
    <tr style="height: 41px;">
    <td style="width: 27.4432%; height: 37px;">&nbsp;Apellido:</td>
    <td style="width: 72.5568%; height: 37px;">&nbsp;'.$apellido.'</td>
    </tr>
    </tbody>
    </table>
    <table border="1" style="height: 83px; width: 80%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
    <tbody>
    <tr style="height: 37px;">
    <td style="width: 27.4648%; height: 37px;">&nbsp;Nro. DNI/Pasaporte:</td>
    <td style="width: 31.8662%; height: 37px;">&nbsp;'.$nroDoc.'</td>
    <td style="width: 18.838%; height: 37px;">&nbsp;Nacionalidad:</td>
    <td style="width: 21.831%; height: 37px;">&nbsp;'.$nacionalidad.'</td>
    </tr>
    <tr style="height: 37px;">
    <td style="width: 27.4648%; height: 37px;">&nbsp;Nro. Legajo:</td>
    <td style="width: 31.8662%; height: 37px;">&nbsp;'.$nroLegajo.'</td>
    <td style="width: 18.838%; height: 37px;">&nbsp;CUIT:</td>
    <td style="width: 21.831%; height: 37px;">&nbsp;'.$cuit.'</td>
    </tr>
    </tbody>
    </table>
    <p style="text-align: center;"><b>Datos de contacto</b></p>
    <table border="1" style="height: 38px; width: 80%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
    <tbody>
    <tr style="height: 37px;">
    <td style="width: 22.007%; height: 38px;">&nbsp;Tel&eacute;fono:&nbsp;</td>
    <td style="width: 27.993%; height: 38px;">&nbsp;'.$fijo.'</td>
    <td style="width: 20.7746%; height: 38px;">&nbsp;Celular:</td>
    <td style="width: 29.2254%; height: 38px;">&nbsp;'.$cel.'</td>
    </tr>
    </tbody>
    </table>
    <table border="1" style="width: 80%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 38px;">
    <tbody>
    <tr style="height: 38px;">
    <td style="width: 13.2042%; height: 38px;">&nbsp;Email:</td>
    <td style="width: 86.7958%; height: 38px;">&nbsp;'.$email.'</td>
    </tr>
    </tbody>
    </table>
    <p style="text-align: center;"><b>Direcci&oacute;n</b></p>
    <table border="1" style="height: 38px; width: 80%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
    <tbody>
    <tr style="height: 37px;">
    <td style="width: 17.0775%; height: 37px;">&nbsp;Calle:</td>
    <td style="width: 38.0281%; height: 37px;">&nbsp;'.$calle.'</td>
    <td style="width: 15.8451%; height: 37px;">&nbsp;N&uacute;mero:</td>
    <td style="width: 29.0493%; height: 37px;">&nbsp;'.$numDir.'</td>
    </tr>
    <tr style="height: 37px;">
    <td style="width: 17.0775%; height: 37px;">&nbsp;Piso:</td>
    <td style="width: 38.0281%; height: 37px;">&nbsp;'.$piso.'</td>
    <td style="width: 15.8451%; height: 37px;">&nbsp;Dpto:</td>
    <td style="width: 29.0493%; height: 37px;">&nbsp;'.$dpto.'</td>
    </tr>
    <tr style="height: 37px;">
    <td style="width: 17.0775%; height: 37px;">&nbsp;Localidad:</td>
    <td style="width: 38.0281%; height: 37px;">&nbsp;'.$local.'</td>
    <td style="width: 15.8451%; height: 37px;">&nbsp;Provincia:</td>
    <td style="width: 29.0493%; height: 37px;">&nbsp;'.$prov.'</td>
    </tr>
    </tbody>
    </table>
    <p><strong>TEXTO DE ADICIONALES:</strong></p>
    <ul>
    <li><strong>adicional 1</strong></li>
    <li><strong>adicional 2</strong></li>
    </ul>
    <p><strong></strong></p>');
    $mpdf->Output();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            GENERAR PDF
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="text" name="apellido" placeholder="apellido" required>
                <input type="text" name="calle" placeholder="calle" required>
                <input type="submit" value="Generar">
            </form>
        </div>
    </div>
</body>
</html>