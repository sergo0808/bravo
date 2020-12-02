<!DOCTYPE html>
<html lang="ru">
<head>
<?php
  $web_title = 'Регистрация';
   require 'bloks/head.php'; ?>
</head>
  <body>

    <main class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <h4>Форма регистрации</h4>
          <form  action="reg/reg.php" method="post">

            <label for="username">Ваше имя:</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="username">Ваш email:</label>
            <input type="email" name="email" id="email" class="form-control">

            <label for="login">Ваш логин:</label>
            <input type="text" name="login" id="login" class="form-control">

            <label for="login">Ваш пароль:</label>
            <input type="password" name="password" id="password" class="form-control">

            <button type="submit"  class="btn btn-success mt-5" >Зарегистрироваться</button>
          </form>
        </div>
        <?php require 'bloks/aside.php'; ?>
  </div>
</main>
<?php require 'bloks/footer.php';?>





</body>

</html>
