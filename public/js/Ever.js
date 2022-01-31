$(document).ready(function() {
   // alert('hola');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery("#idP").on("change",function(){
        var id=jQuery('#idP').val()
       // alert('el id'+id);
        jQuery.ajax({
            type:"POST",
            url:"/Ventas/index/create/"+id,
            data:{},
            success: function(respuesta){
                var preciVenta=respuesta[0].PrecioVenta;
                var Stock=respuesta[0].existencia;
                jQuery("#p").val(preciVenta);
                jQuery("#s").val(Stock);
                if(Stock<=1)alert('pide mas productos')
                console.log(respuesta[0]);
               
        }
    })
    })

});