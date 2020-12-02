<?php
$username = trim(filter_var($_POST['username']),FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email']),FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login']),FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['password']),FILTER_SANITIZE_STRING));
if($username == '')
exit();
else if ()
if($email == '')
exit();
else if ()
if($pass == '')
exit();

$hash ="dgf59nbf5y4k9tyh45298psdoviu";
$pass = md5($pass.$hash );

$user = 'a345254_a345254';
$password ='qwerty'  ;
$db = 'Users';
$host = 'a345254.mysql.mchost.ru';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password );
$sql = 'INSERT into Users(name, Login, email, password) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $login, $email , $pass ]);
?>
