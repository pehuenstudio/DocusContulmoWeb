<?php
?>
<form id="formulario_inngreso_documento" enctype="multipart/form-data">
    <input id="run_funcionario_creador" name="run_funcionario_creador" type="hidden" value="<?php echo $run_funcionario;?>">
    <div class="grilla10">Seleccione Documento<strong>*</strong></div>
    <input id="documento" name="documento" type="file" accept="application/pdf">
    <div class="grilla10">&nbsp;</div>
    <div class="grilla10">Tipo De Documento:<strong>*</strong></div>
    <div class="grilla10">
        <select id="id_documento_tipo" name="id_documento_tipo">
            <option value="0">Seleccione Tipo Documento</option>
        </select>
    </div>
    <div class="grilla10">&nbsp;</div>
    <div class="grilla10">Nombre Completo:<strong>*</strong></div>
    <div class="grilla10">
        <input id="nombre_documento" name="nombre_documento" maxlength="45">
    </div>
    <div class="grilla10">&nbsp;</div>
    <div class="grilla10">Descripción:</div>
    <div class="grilla10">
        <textarea maxlength="300"></textarea>
    </div>
    <div class="grilla10">
        <input type="submit" value="Ingresar Documento">
    </div>
</form>