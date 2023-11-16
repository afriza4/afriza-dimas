<?php 
require "funcion.php";
if(!isset($_SESSION["login"])){
    header("Loaction:login.php");
    exit;
}
if(isset($_POST["submit"])){

    if(tambah($_POST)){
        echo"
        <script>
    alert('data berhasil dimasukkan');
    document.location.href='index.php';
</script>
        ";
    }else{
        echo"
        gagal ditambah
        ";
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

        
        .container{
            background-image: url('img/banner.jpeg');
            background-size: cover;
            width: 100%;
            height: 650px;
            position: relative;
            display: flex;
            justify-content: center;
            
       
}
.container::after{
    content: '';
    display: block;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: white;
    opacity: 0.4;
}
.container .f{
    z-index: 1;
}

input
{
  
   height: 18px;
}button{
    height: 25px;
}.mahok{
position: relative;
left: -470px;
margin-left: 5px;
}a{

    color: black;
}
table{
    margin-top: 70px;
}





    </style>
</head>
<body>
   
        <div class="container">
        <form class="f" action="" method="post">
        <h4 class="mahok"><a href="index.html">KEMBALI KE HALAMAN AWAL</a></h4><br><br>
        <table  cellpadding="5" cellspacing="0">
            <tr>
           <td> PEMESAN : </td> <td> <input type="text" name="PEMESAN" placeholder="pemesan"></td>
            </tr>
            <tr>
          <td>  PRODI : </td> <td> <input type="text" name="PRODI" placeholder="prodi"></td>
            </tr>
            <tr>
          <td> RUANG LAB : </td>  <td><input type="text" name="RUANGLAB" placeholder="ruang lab"></td>
            </tr>
            <tr>
           <td> TANGGAL PINJAM :</td> <td><input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"></td>
            </tr>
            <tr>
           <td>JAM MULAI :</td>  <td><input type="time" name="JAMMULAI" placeholder="jam mulai"></td>
            </tr>
           <tr>
          <td> JAM SELESAI :</td> <td><input type="time" name="JAMSELESAI" placeholder="jam selesai"></td>
            </tr>
            <tr>
           <td>KETERANGAN :</td> <td><input type="text" name="KETERANGAN" placeholder="keterangan"></td>
            </tr>
            <tr>
          <td>  PENANGGUNG JAWAB :</td> <td> <input type="text" name="JAWAB" placeholder="penanggung jawab"></td>
            </tr>
            <tr>
          <td> <button type="submit" name="submit">Kirim!!</button></td> 
            </tr>
            </table>
        </form>
    </div>
</body>
</html>