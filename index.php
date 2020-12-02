<!DOCTYPE html>
<html lang="ru">
<head>
<?php
$web_title = ' Главная ';
 require 'bloks/head.php'; ?>
</head>
  <body>
    <?php

     require 'bloks/header.php' ;?>
    <main class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          Основное меню
        </div>
        <?php require 'bloks/aside.php'; ?>
  </div>
</main>
<?php require 'bloks/footer.php';?>





</body>

</html>
