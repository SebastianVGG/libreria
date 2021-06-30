AOS.init();
$(document).ready(function(){
    $("#AgreCarrito").submit(function(e){
        $.ajax({
            type: "POST",
            url: "agregarACarrito.php",
            data: $(this).serialize(),
            success: function(response){
              let jsonData = JSON.parse(response);
              if (jsonData.success == 1) {
                let enviar = `<div class="row mt-3 justify-content-center  border-2 border">
                <div class="text-center pt-2">
                  <p>Se añadio ${jsonData.CANT} libro(s) '${jsonData.TIT}' a tu carrito exitosamente.</p>
                  <p>Un total de: ${jsonData.CANTFIN} libros en tu carrito de este titulo.</p>
                </div>
              </div>`;

              $("#mostrar").html(enviar);
              } else if(jsonData.success == 0) {
                let enviar = `<div class="row mt-3 justify-content-center  border-2 border">
                <div class="text-center pt-2">
                  <p>No se ha podido realizar la operación.</p>
                </div>
              </div>`;

              $("#mostrar").html(enviar);
              } else if(jsonData.success == 3) {
                let enviar = `<div class="row mt-3 justify-content-center  border-2 border">
                <div class="text-center pt-2">
                  <p>Se añadio ${jsonData.CANT} libro(s) '${jsonData.TIT}' a tu carrito exitosamente.</p>
                </div>
              </div>`;

              $("#mostrar").html(enviar);
              } else{
                let enviar = `<div class="row mt-3 justify-content-center  border-2 border">
                <div class="text-center pt-2">
                  <p>Por favor ingresa solo numeros positivos en "Cantidad a agregar".</p>
                </div>
              </div>`;

              $("#mostrar").html(enviar);
              } 
            }
        })
        e.preventDefault();
    })
 
})


function quitarDeCarrito($id){
    $.ajax({
        type: "POST",
        url: "quitarDeCarrito.php?id="+$id,
        data: $(this).serialize(),
        success: function(response){
          let jsonData = JSON.parse(response);
          if (jsonData.success == 1) {
            alert("Se ha eliminado correctamente el registro");
            location.reload();
          } else {
            alert("No se pudo eliminar el registro");
          }
        }
    })

    e.preventDefault();
}