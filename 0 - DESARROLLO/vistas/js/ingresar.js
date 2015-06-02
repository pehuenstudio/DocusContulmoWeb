jQuery(document).ready(function(){
    get_documentos_tipos();
});

function get_documentos_tipos(){
    jQuery.ajax({
        method: "POST",
        url: "/_code/controladores/documento_tipo.controlador.php",
        data: {id_funcion: "1"}
    })
        .done(function(data){
            console.log(data);
            var data = jQuery.parseJSON(data);
            jQuery.each(data, function(i, v){
                jQuery("#id_documento_tipo").append(
                    jQuery("<option></option>")
                        .val(data[i].id_documento_tipo)
                        .text(data[i].nombre)
                );
            });
        })
    ;
}