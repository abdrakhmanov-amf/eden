<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eden News | Sign Up</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/signup.css">
        <script src="https://unpkg.com/imask"></script>
    </head>
    <body>
      <form  method="post" class="needs-validation" novalidate action="/regis_to_new_user">
        <h1>Регистрация</h1>
        
        <fieldset>
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">First name</label>
          <input type="text" class="form-control" id="validationCustom01" required name="fullname">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom02">Электронная почта:</label>
          <input type="email" class="form-control" id="validationCustom02" required name="email">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
 
        <div class="col-md-12 mb-3">
          <label for="validationCustom03">Пароль:</label>
          <input type="password" class="form-control" id="validationCustom03" required name="password">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationCustom04">Подтверждение пароля:</label>
          <input type="password" class="form-control" id="validationCustom04" required name="password_confirm">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
 
        <div class="col-md-12 mb-3">
          <label for="validationCustom05">Номер телефона:</label>
          <input type="tel" class="form-control" id="validationCustom05" required >
          <input type="hidden" name="tel">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
          <p class="message"><a href="/login">Авторизоватся</a></p>
    
        </fieldset>
        
       
        <button type="submit">Отправить</button>
      </form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


var element = document.getElementById('validationCustom05');
element.oninput = function(){
  var maskOptions = {
  mask: '+{7}(000)000-00-00'
};
var mask = IMask(element, maskOptions);
console.log(mask.unmaskedValue)

$('input[name=tel]').val(mask.unmaskedValue)
}

</script>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>