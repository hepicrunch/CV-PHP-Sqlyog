<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM cv_table ORDER BY name ASC");
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
  <h1>CV Fandi Febrian Wijanarko</h1>
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
    echo "<img src='Fotohiking1.jpg' class='card-img' alt='Photo'>";
    echo "</div>";
    echo "<h3 class='card-text mb-4'><strong>Name :</strong> " . $row['name'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Occupation :</strong> " . $row['occupation'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>City :</strong> " . $row['city'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>About :</strong> " . $row['about'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Email :</strong> " . $row['email'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Address :</strong> " . $row['address'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Telp :</strong> " . $row['telp'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Last Education :</strong> " . $row['last_education'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Work Experience :</strong> " . $row['work_experience'] . "</h3>";
    echo "<h3 class='card-text mb-4'><strong>Skills :</strong> " . $row['skills'] . "</h3>";
    echo "</div>";
    echo "</div>";
  }
  ?>

</body>

</html>
