<?php
header('Content-Type: text/html; charset=utf-8');
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/includes/_config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/includes/_conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/modelos/DocumentoTipoMatriz.php";

$id_funcion = $_POST["id_funcion"];

switch($id_funcion){
    case "1":
        get_documentos_tipos();
        break;
    default:
        break;
}

function get_documentos_tipos(){
    $matriz_tipo_documento = new DocumentoTipoMatriz();
    $matriz_tipo_documento->db_get_documentos_tipos();
    print_r($matriz_tipo_documento->to_json());
}
?>