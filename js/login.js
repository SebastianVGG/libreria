$(document).ready(function(){
const nombre = $("#login_nombre_id")[0];
const apellidos = $("#login_apellidos_id")[0];
const correo = $("#login_correo_id")[0];
const password = $("#login_password_id")[0];
const password1 = $("#login_password1_id")[0];


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = $(".needs-validation");
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          } else{
            validate.validatename(nombre);
          }
          
          $(form).addClass("was-validated");
        }, false)
      });
  })()

});