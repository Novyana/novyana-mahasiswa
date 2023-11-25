
<?php
include '../koneksi.php';
//mengambil id dari halaman index
$id=$_GET['id'];

//membuat query dari id yg ada 
$query="SELECT * FROM tabelmahasiswa WHERE ID='$id'";
$result=mysqli_query($conn, $query);
 
//mengambil data array $result dan ditampilkan kedalam elemen input
while ($d=mysqli_fetch_assoc($result)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <style>
  body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 2);
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        a{
            color: white;
        }
        button{
            background-color: grey;
            color: #fff;
            cursor: pointer;
            border: none;
            height: 35px;
            border-radius: 4px;
        }
        button:hover{
          background-color:#94a197;
        }

        input[type="submit"] {
          padding: 10px;
            background-color: grey;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #94a197;
        }
        </style>
</head>

<body>
<div class="container">
  <h1>Ganti Data Tabel</h1>
  <form action="editProses.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $d['ID'];?>">
    <label>Nama :<br>
      <input type="text" name="Nama" value="<?php echo $d['Nama'];?>" required>
    </label><br>
    <label>Jenis_Kelamin :<br>
      <input type="text" name="Jenis_Kelamin"  value="<?php echo $d['Jenis_Kelamin'];?>"required>
    </label><br>
    <label>Alamat:<br>
      <input type="text" name="Alamat"  value="<?php echo $d['Alamat'];?>"required>
    </label><br>
    <button><a href="index.php">Kembali</a></button><input type="submit" name="submit">
  </form>
  <?php
}
?>
</body>

</html>