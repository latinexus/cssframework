<?php
/**
 * Creator: Eric Larrea
 * E-mail: elapez@gmail.com
 * From: www.latinex.us
 * Date: 27/09/2023
 * Time: 07:01 p. m.
 * Proyecto: cp_materializecss
 */
require_once '../vendor/autoload.php'; // Carga el archivo autoload generado por Composer

use Latinexus\Css\MaterializeCss;
use Latinexus\Css\HtmlTag;

$tag1 = new HtmlTag('input', [
    'type' => 'text',
    'name' => 'be',
    'id' => 'br',
    'value' => 'Hola Mundo'
]);

// $tag1; // Salida: <input type="hidden" name="be" id="br" value="2" />



$tag2 = new HtmlTag('a', [
    'href' => 'direccion/ir',
    'class' => 'btn'
], 'CONTINUAR');

// $tag2; // Salida: <a href="direccion/ir" class="btn">volver</a>
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MatCss</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <form method="post" id="form1" enctype="multipart/form-data">
        <div class="row">
            <div class="col s12">
                <?= $tag1 ?>
            </div>
            <div class="col s12">
                <?= $tag2 ?>
            </div>
        </div>
    </form>
</body>
</html>


