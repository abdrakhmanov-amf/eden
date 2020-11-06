<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eden News</title>
    <link rel="stylesheet" href="/css/signin.css">
</head>
<body>
    
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>Создать</button>
      <p class="message">Уже зарегистрирован?<a href="#">Войти</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>авторизоваться</button>
      <p class="message">Не зарегистрирован?<a href="#">Создать аккаунт</a></p>
    </form>
  </div>
</div>

<script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

</body>
</html>