<?php
//echo __FILE__."<br/>";
$run_funcionario = "166800837";
?>

<link rel="stylesheet" href="/_code/vistas/css/grillas.css">
<link rel="stylesheet" href="/_code/vistas/css/ingreso.css">

<script src="/_code/vistas/js/jquery.min.js"></script>
<script src="/_code/vistas/js/jquery-ui.js"></script>
<script src="/_code/vistas/js/ingresar.js"></script>

<div class="contenedor_grillas">
    <h1>Ingresar Documento</h1>
    <div class="grilla10">&nbsp;</div>
    <div class="grilla10">&nbsp;</div>
    <div class="grilla5 izquierda">
        <?php require_once $_SERVER["DOCUMENT_ROOT"]."/_code/vistas/ingreso.preview.php";?>
    </div>
    <div class="grilla5 derecha">
        <?php require_once $_SERVER["DOCUMENT_ROOT"]."/_code/vistas/ingreso.formulario.php";?>
    </div>
</div>