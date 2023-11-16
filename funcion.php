<?php 
$coon=mysqli_connect("localhost","root","","phpdasar");
function query($database){
    global $coon;
    $rows=[];
    $result=mysqli_query($coon,$database);
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    $nama=$data["PEMESAN"];
    $prodi=$data["PRODI"];
    $ruang=$data["RUANGLAB"];
    $tanggal=$data["TANGGALPINJAM"];
    $mulai=$data["JAMMULAI"];
    $selesai=$data["JAMSELESAI"];
    $keterangan=$data["KETERANGAN"];
    $penanggung=$data["JAWAB"];
    
    global $coon;
    $tambah="INSERT INTO lab VALUES
    ('','$nama','$prodi','$ruang','$tanggal','$mulai','$selesai','$keterangan','$penanggung')
    ";
    $result=mysqli_query($coon,$tambah);
    return $result;
}
function hapus($d){
    global $coon;

    $result=mysqli_query($coon,"DELETE FROM lab WHERE ID = $d");
    return $result;
}

function ubah($data){
    $nama=htmlspecialchars($data["PEMESAN"]);
    $prodi=htmlspecialchars($data["PRODI"]);
    $ruang=htmlspecialchars($data["RUANGLAB"]);
    $tanggal=htmlspecialchars($data["TANGGALPINJAM"]);
    $mulai=htmlspecialchars($data["JAMMULAI"]);
    $selesai=htmlspecialchars($data["JAMSELESAI"]);
    $keterangan=htmlspecialchars($data["KETERANGAN"]);
    $penanggung=htmlspecialchars($data["JAWAB"]);
    $id=$data["ID"];
    global $coon;
    $result=mysqli_query($coon," UPDATE lab SET
    PEMESAN = '$nama',
    PRODI = '$prodi',
    RUANG LAB = '$ruang',
    TANGGAL PINJAM = '$tanggal',
    JAM MULAI = '$mulai',
    JAM SELESAI = '$selesai',
    KETERANGAN = '$keterangan',
    PENANGGUNG JAWAB = '$penanggung',
    WHERE ID = $id
    ");
    return $result;
}

function cari($keyword){
    $quer="SELECT * FROM lab 
    WHERE
    PEMESAN LIKE '%$keyword%'
    ";
 return query($quer);
}
?>

