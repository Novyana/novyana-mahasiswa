<?php
include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman Kita</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <!-- link navigsi menu -->
  <ul>
    <li><a href="../">Home</a></li>
      <li><a href="../Tabelmahasiswa/">tabel mahasiswa</a></li>
      
  </ul>
  <!-- Akhir navgasi menu -->

  <h1>Menampilkan Data Tabel</h1>
  <button><a href="tambah.php">+ Tambah Data</a></button>
  <table border width="100%";>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Jenis_kelamin</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
    <?php
    $query = "SELECT * FROM tabelmahasiswa";
    $result = mysqli_query($conn, $query);
    $data= mysqli_num_rows($result);
    if ($data == 0) {
      echo "<tr><td colspan=4 style='color:red;'>Tidak ada data</td></tr>";
    } else {
      $no = 1;
      while ($d = mysqli_fetch_assoc($result)) {

    ?>
        <tr>
          <td><?php echo $d['ID']; ?></td>
          <td><?php echo $d['Nama']; ?></td>
          <td><?php echo $d['Jenis_Kelamin']; ?></td>
          <td><?php echo $d['Alamat']; ?></td>
        
           <div class="btn">
          <td><button><a href="edit.php?id=<?= $d['ID'] ?>">edit</a></button> |
          <button><a href="hapus.php?id=<?= $d['ID']; ?>" onclick="return confrim('yakin hapus data?')">hapus</a></button></td>
      </div>
      </tr>

    <?php
        $no++;
      }
    }
    
    ?>
  </table>

</body>

</html>