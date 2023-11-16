<?php 
require 'funcion.php';

$k=$_GET["y"];

$array = query("SELECT * FROM lab WHERE ID = $k")[0];




 if(isset($_POST["t"])){


    if(ubah($_POST)){
        echo "
        <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
           </script>";
    }

   mysqli_query($coon, "UPDATE lab SET
    PEMESAN = '$_POST[PEMESAN]' 
    WHERE ID = $k
    ");
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href='index.php';
    </script>
        ";
        mysqli_query($coon, "UPDATE lab SET
        PRODI = '$_POST[PRODI]' 
        WHERE ID = $k
        ");
            echo "
            <script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>
            ";
            mysqli_query($coon, "UPDATE lab SET
            RUANG LAB = '$_POST[RUANGLAB]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            TANGGAL PINJAM = '$_POST[TANGGALPINJAM]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            JAM MULAI = '$_POST[JAMMULAI]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            JAM SELESAI = '$_POST[JAMSELESAI]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            KETERANGAN = '$_POST[KETERANGAN]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon,"UPDATE lab SET 
                PENANGGUNG JAWAB = '$_POST[JAWAB]'
                WHERE ID =$k
                ");
                   
}
            ?>
            

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: slategray;
        }
        .from{
            margin: 150px auto;
            width: 60%;
            border: 1px solid black;
            border-radius: 20px;
            padding: 50px;
            background-color: skyblue;
        }
        table{
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="from" action="" method="post">
            <input type="hidden" name="ID" value="<?php echo $array["ID"]?>"><br>
            <table cellpadding="5" cellspacing="0">
                <tbody>
            <tr>
          <td>  PEMESAN :</td><td><input type="text" name="PEMESAN" placeholder="pemesan" value="<?php echo $array["PEMESAN"]?>"></td>
          </tr>
          <tr>
           <td>PRODI :</td><td><input type="text" name="PRODI" placeholder="prodi"  value="<?php echo $array["PRODI"]?>"></td>
           </tr>
           <tr>
           <td> RUANG LAB :</td><td><input type="text" name="RUANGLAB" placeholder="ruang lab"  value="<?php echo $array["RUANG LAB"]?>"></td>
           </tr>
      
           <tr>
         <td> TANGGAL PINJAM :</td><td><input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"  value="<?php echo $array["TANGGAL PINJAM"]?>"></td>
           </tr>
       
         <tr>
          <td> JAM MULAI :</td><td><input type="time" name="JAMMULAI" placeholder="jam mulai" value="<?php echo $array["JAM MULAI"]?>"></td>
           </tr>
        <tr>
          <td> JAM SELESAI :</td><td><input type="time" name="JAMSELESAI" placeholder="jam selesai" value="<?php echo $array["JAM SELESAI"]?>"></td>
           </tr>
        <tr>
          <td> KETERANGAN :</td><td><input type="text" name="KETERANGAN" placeholder="keterangan" value="<?php echo $array["KETERANGAN"]?>"></td>
           </tr>
         <tr>
           <td> PENANGGUNGJAWAB :</td><td><input type="text" name="JAWAB" placeholder="penanggung jawab"  value="<?php echo $array["PENANGGUNG JAWAB"]?>"></td>
           </tr>
        <tr>
           <td><button type="submit" name="t">Kirim!!</button>
           </tr>
           </tbody>
            </table>
        </form>
    </div>
</body>
</html>