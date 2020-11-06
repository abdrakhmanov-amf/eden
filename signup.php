<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eden News | Sign Up</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/signup.css">
    </head>
    <body>

      <form action="index.html" method="post">
      
        <h1>Авторизация</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Ваши данные</legend>
          <label for="name">ФИО:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Электронная почта:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Пароль:</label>
          <input type="password" id="password" name="user_password">

          <label for="password">Подтверждение пароля:</label>
          <input type="password" id="password" name="user_confirm_password">

          <label for="name">Номер телефона:</label>
          <input type="text" id="number" name="user_number">
    
        </fieldset>
        
       
        <button type="submit">Отправить</button>
      </form>
      
    </body>
</html>