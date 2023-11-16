<?php 
require 'funcion.php';
if(isset($_POST['register'])){
    $nama=$_POST['name'];
    $password=$_POST['password'];
    $konfimasi=$_POST['konfimasi'];

    if($password!=$konfimasi){
        echo"masukan password konfimasi yang benar";
        return false;
    }

    $result=mysqli_query($coon,"SELECT * FROM logins WHERE username='$nama'");
    $row=mysqli_fetch_assoc($result);
    if($row==1){
echo"usename sudah ada";
return false;
    }
if($password=password_hash($password,PASSWORD_DEFAULT)){
    $tambah="INSERT INTO logins VALUES
    ('','$nama','$password')
    ";
    mysqli_query($coon,$tambah);
    // $_SESSION['login']=true;
    header("Location:login.php");
    exit;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <form action="" method="post">

    <input type="text" name="name" placeholder="masukan nama" required>
    <input type="password" name="password" placeholder="masukan password" required>
    <input type="password" name="konfimasi" placeholder="masukan ulang password" required>
    <button type="submit" name="register">Register!!</button>
    </form>
</body>
</html>