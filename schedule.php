<?php 
 require "funcion.php";

$data=count(query('SELECT * FROM lab '));
$jumlahHalaman=ceil($data/2);

 $halamanAktif= (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
 $data=('SELECT * FROM lab ');
 $result=mysqli_query($coon , $data);
$row=mysqli_fetch_assoc($result);
$r=1;
var_dump($row);
// $row= 2 * $halamanAktif - $halamanAktif;
 $database = query('SELECT * FROM lab  LIMIT');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENJADWALAN LAB UPT KOMPUTER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">PENJADWALAN LAB UPT KOMPUTER</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li class="active"><a href="Schedule.html">SCHEDULE</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="about.html">ABOUT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Schedule</p>
		</div>
	</section>
	<div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PEMESAN</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>TANGGAL PINJAM</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                    <th>KETERANGAN</th>
                    <th>PENANGGUNG JAWAB</th>
                </tr>
            </thead>
            <tbody>
			
			<?php for($i=1;$i<=$jumlahHalaman;$i++) :?>
					<a href="?halaman=<?=$i;?>"><?= $i ?></a>
					<?php endfor;?>

                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                <tr>
					<td><?php echo $i; ?></td>
                <td><?php echo $dts["PEMESAN"] ?></td>
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["TANGGAL PINJAM"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>
                <td><?php echo $dts["KETERANGAN"] ?></td>
                <td><?php echo $dts["PENANGGUNG JAWAB"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>