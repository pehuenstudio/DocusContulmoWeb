<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/includes/_config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/includes/_conexion.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/modelos/DocumentoTipo.php";
class DocumentoTipoMatriz {
    private $matriz = array();

    public function get_matriz()
    {
        return $this->matriz;
    }
    public function set_matriz($matriz)
    {
        $this->matriz = $matriz;
    }

    public function to_matriz(DocumentoTipo $documento_tipo){
        $matriz = array(
            "id_documento_tipo" => $documento_tipo->get_id_documento_tipo(),
            "nombre" => $documento_tipo->get_nombre(),
            "descripcion" => $documento_tipo->get_descripcion(),
            "estado" => $documento_tipo->get_estado()
        );

        array_push($this->matriz, $matriz);
    }

    public function to_json(){
        $json = json_encode($this->matriz, JSON_UNESCAPED_UNICODE);
        return $json;
    }

    public function db_get_documentos_tipos(){
        global $myPDO;
        $sentencia = $myPDO->prepare("CALL get_documentos_tipos");
        $sentencia->execute();

        $data = $sentencia->fetchAll(0);
        foreach($data as $row){
            $documento_tipo = new DocumentoTipo();
            $documento_tipo->set_id_documento_tipo($row["id_documento_tipo"]);
            $documento_tipo->set_identidad(
                $row["nombre"],
                $row["descripcion"]
            );

            $this->to_matriz($documento_tipo);
        }
    }


}
?>