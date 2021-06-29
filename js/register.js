
$(document).ready(function () {
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = $(".needs-validation2");
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          var email = $("#register_correo").val();
          var pass = $("#register_password_id").val();
          var pass1 = $("#register_password1").val();
          if(validateEmail(email))
            if(validatePasswordModerate(pass) && validatePasswordModerate(pass1))
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              } else {
                event.preventDefault();
                event.stopPropagation();
                let url1 = "../php/perfil.php";
                $.ajax({
                  type: "POST",
                  url: "../php/session/register_backend.php",
                  data: $(this).serialize(),
                  success: function (response) {
                    try {
                      console.log(JSON.parse(response));
                      let jsonData = JSON.parse(response);
                      if (jsonData.success == 1) {
                        alertify.alert(
                          "Se registro su cuenta correctamente.",
                          function () {
                            window.location.replace(url1);
                          }
                        );
                      } else {
                        if (jsonData.err == 0) {
                          let inner = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Los campos están incorrectos. </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>`;
                          $("#header_").html(inner);
                        } else if (jsonData.err == 1) {
                          let inner = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Correo electronico ya registrado. </strong>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                          $("#header_").html(inner);
                        } else if (jsonData.err == 2) {
                          let inner = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>La contraseña no es la misma. </strong>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                          $("#header_").html(inner);
                        }
                      }
                    } catch (e) {
                      let inner = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong> Problema en el servidor</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>`;
                      $("#header_").html(inner);
                    }
                  },
                });
              }
              else{
                event.preventDefault();
                event.stopPropagation();
                $('#invalid-feedback_pass').show();
                $('#register_password_id').val('');
                $('#register_password1').val('');
              }
              else {
                event.preventDefault();
                event.stopPropagation();
                $('#invalid-feedback_correo').show();
                $('#register_correo').val('');

              }
          $(form).addClass("was-validated");
        },
        false
      );
    });
  })();
});

const validateEmail = (email) => {
  const emailRegex = /^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  if(emailRegex.test(email)) return true;
  else return false;
}

const validatePasswordModerate = (password) => {
  //Should have 1 lowercase letter, 1 uppercase letter, 1 number, and be at least 8 characters long
  const passwordRegex = /(?=(.*[0-9]))((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.{8,}$/
  if(passwordRegex.test(password)) return true;
  else return false;
}