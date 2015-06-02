<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/includes/_config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/_code/includes/_conexion.php";
class DocumentoTipo {
    private $id_documento_tipo;
    private $nombre;
    private $descripcion;
    private $estado = "1";

    public function get_descripcion()
    {
        return $this->descripcion;
    }
    public function set_descripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function get_estado()
    {
        return $this->estado;
    }
    public function set_estado($estado)
    {
        $this->estado = $estado;
    }
    public function get_id_documento_tipo()
    {
        return $this->id_documento_tipo;
    }
    public function set_id_documento_tipo($id_documento_tipo)
    {
        $this->id_documento_tipo = $id_documento_tipo;
    }
    public function get_nombre()
    {
        return $this->nombre;
    }
    public function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function set_identidad($nombre, $descripcion){
        $this->set_nombre($nombre);
        $this->set_descripcion($descripcion);
    }
}
?>