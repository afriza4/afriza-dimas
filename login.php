<?php
require 'funcion.php';
session_start();
if(isset($_SESSION['login'])){
  header("Location:index.php");
  exit;
}
if(isset($_POST['login'])){
    $nama=$_POST['name'];
    $password=$_POST['password'];
    $result=mysqli_query($coon,"SELECT*FROM logins WHERE username='$nama'");
    if(mysqli_num_rows($result)===1){
        
        $row=mysqli_fetch_assoc($result);
        if(password_verify($password,$row['passwords'])){
          setcookie('key',hash('sha256',$row['username']),time()+60);
            $_SESSION["login"]=true;
            $_COOKIE['key'];
            header("Location:index.php");
            exit;
        }
      }
  // }else if(isset($_SESSION['login'])){
  //   header("Location:index.php");
  //   exit;
  // }
    else{
      echo "<h3>Anda Belum Memiliki Akun</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        form{
            width: 60%;
            padding: 15px;
            margin: 50px auto;
            text-align: center;
            border: 1px solid black;
        }
        form input{
            display: block;
            margin: 10px;
            height: 20px;
            position: relative;
            left: 38%;
        }
    </style>
<body>
    <h1>Halooo</h1>
    <form action="" method="post">
    <h4><a href="register.php">Register</a></h4>
<input type="text" name="name" placeholder="masukan nama" required>
<input type="password" name="password" placeholder="masukan password" required>
<button type="submit" name="login">Login!</button>
</form>
</body>
</html>