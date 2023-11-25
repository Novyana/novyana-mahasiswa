<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
  <h1>Tambah Tabel Data </h1>
  <form action="tambahProses.php" method="post">
    <label>ID :<br>
      <input type="text" name="ID" required autofocus>
    </label><br>
    <label>Nama :<br>
      <input type="text" name="Nama" required>
    </label><br>
    <label>Jenis_Kelamin :<br>
      <input type="text" name="Jenis_Kelamin" required>
    </label><br>
    <label>Alamat :<br>
       <input type="text" name="Alamat" required>
    </label><br>
    <button><a href="index.php">Kembali</a></button><input type="submit" name="submit">
  </div>
  
      <!-- <div class="continer">
       <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ID:</label>
  <input type="text" class="form-control" name="ID" placeholder="masukkan id">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama:</label>
  <input type="text" class="form-control" name="Nama" placeholder="masukkan nama">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Jenis_Kelamin:</label>
  <input type="text" class="form-control" name="Jenis_Kelamin" placeholder="masukkan jenis kelamin">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Alamat:</label>
  <input type="text" class="form-control" name="Alamat" placeholder="masukkan alamat">
</div>
    <button><a href="index.php">Kembali</a></button><input type="submit" name="submit">
  </form>
</div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
