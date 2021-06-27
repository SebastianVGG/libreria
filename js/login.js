$(document).ready(function(){

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = $(".needs-validation1");
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }else{
            event.preventDefault()
            event.stopPropagation()
            let url1 = "../index.php";
            $.ajax({
              type: "POST",
              url: "../php/session/login_backend.php",
              data: $(this).serialize(),
              success: function (response) {
                try {
                  console.log(JSON.parse(response))
                  let jsonData = JSON.parse(response);
                  if (jsonData.success == 1) {
                    window.location.replace(url1);
                  } else{
                    
                    if(jsonData.err == 0){
                      window.location.replace(url1);
                    }else if(jsonData.err == 1){
                      let inner = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>La cuenta no existe o las credenciales son incorrectas. </strong>
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
          $(form).addClass("was-validated");
        }, false)
      });
  })()

});