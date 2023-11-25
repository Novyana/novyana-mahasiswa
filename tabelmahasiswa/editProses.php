<?php
include '../koneksi.php';
if (isset($_POST['submit'])) {
  $ID= $_POST['ID'];
  $Nama= $_POST['Nama'];
  $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
  $Alamat = $_POST['Alamat'];
      //masukkan data user kedalam database
      $query = "UPDATE tabelmahasiswa SET Nama='$Nama', Jenis_Kelamin='$Jenis_Kelamin', Alamat='$Alamat' WHERE ID='$ID'";
      $result = mysqli_query($conn, $query);
      if ($query){
      echo "<script>alert('Data berhasil diubah!')</script>";
      echo "<script>location='index.php'</script>";
      }else{
      echo "<script>alert('Data gagal diubah!')</script>";
       echo "<script>location='index.php'</script>";
    }
  }
