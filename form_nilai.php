<!DOCTYPE html>

<head>
</head>

<body>
<form method="GET" action="form_nilai.php">
    Nama : <input type="text" name="nama" value="" size="30"/><br/>
    Mata Kuliah :
    <select name="matkul">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemrograman Web</option>
    </select><br/>
    Nilai UTS : <input type="number" name="nilai_uts" value="" size="6"/><br/>
    Nilai UAS : <input type="number" name="nilai_uas" value="" size="6"/><br/>
    Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas" value="" size="6"/><br/>
    <input type="submit" value="Simpan" name="proses"/>
</form>



<?php
    $nama_siswa = $_GET['nama'] ;
    $mata_kuliah = $_GET['matkul'] ;
    $nilai_uts = $_GET['nilai_uts'] ;
    $nilai_uas = $_GET['nilai_uas'] ;
    $nilai_tugas = $_GET['nilai_tugas'] ;

    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Matakuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    
?>

<?php
    include "array_siswa.php";
?>

</body>
</html>