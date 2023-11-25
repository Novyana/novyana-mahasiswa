<?php
include '../koneksi.php';
//mengambil data yang dikirim halaman index
$id = $_GET['id'];

//membuat query
$query = "DELETE FROM tabelmahasiswa WHERE ID='$id'";
$result = mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Data berhasil dihapus!')</script>";
    echo "<script>location='index.php'</script>";
  } else {
      echo "<script>alert('tidak berhasil menghapus data!')</script>";
      echo "<script>location='index.php'</script>";
  }

