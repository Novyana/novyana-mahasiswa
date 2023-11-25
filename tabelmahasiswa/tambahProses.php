<?php
include '../koneksi.php';

if (isset($_POST['submit'])) 
  $ID = $_POST['ID'];
  $Nama = $_POST['Nama'];
  $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
  $Alamat = $_POST['Alamat'];
// masukkan data tabelmahasiswa kedalam database
    $query = "INSERT INTO tabelmahasiswa VALUES ('$ID', '$Nama', '$Jenis_Kelamin', '$Alamat')";
    $result = mysqli_query($conn, $query);
     if ($query) {
      echo "<script>alert('Data berhasil disimpan!')</script>";
      echo "<script>location='index.php'</script>";
    } else {
      echo "<script>alert('tidak bisa menyimpan!')</script>";
      echo "<script>location='tambah.php'</script>";
    }
  

?>

