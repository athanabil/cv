<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM cv_tableatha ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>CRUD PHP</title>
  <style>
    .card {
      margin-bottom: 20px;
    }

    .card-img-container {
      position: relative;
      max-width: 200px;
      max-height: 200px;
      overflow: hidden;
      border-radius: 10px; /* Setengah dari lebar atau tinggi foto untuk membuat sudut lembut */
    }

    .card-img {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <h1>CV Atha Nabil Aqila</h1>
  <div class="mb-4">
    <a class="btn btn-success" href="add.php">Tambah User</a>
    <?php
      while ($row = mysqli_fetch_array($result)) {
        echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning mx-2'>Update</a>";
      }
    ?>
  </div>

  <?php
  mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
  while ($row = mysqli_fetch_array($result)) {
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo "<div class='card-img-container float-end'>";
    echo "<img src='kucingatha.jpg' class='card-img' alt='Photo'>";
    echo "</div>";
    echo "<h3 class='card-text mb-4'><strong>Nama :</strong> " . $row['nama'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Alamat :</strong> " . $row['alamat'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Telepon :</strong> " . $row['telepon'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Email :</strong> " . $row['email'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Web :</strong> " . $row['web'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Pendidikan :</strong> " . $row['pendidikan'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Pengalaman Kerja :</strong> " . $row['pengalaman_kerja'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Keterampilan :</strong> " . $row['keterampilan'] . "</h3>";
    echo "</div>";
    echo "</div>";
  }
  ?>

</body>

</html>
