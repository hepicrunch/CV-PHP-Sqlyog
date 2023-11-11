<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>CRUD PHP | Add</title>
</head>

<body class="p-3">
  <a class="btn btn-success" href="index.php">Kembali ke Index</a>

  <form action="add.php" method="post">
    <table class="table table-striped">
      <tr>
        <td>name</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>occupation</td>
        <td><input type="text" name="occupation"></td>
      </tr>
      <tr>
        <td>city</td>
        <td><input type="text" name="city"></td>
      </tr>
      <tr>
        <td>about</td>
        <td><input type="text" name="about"></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>address</td>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td>telp</td>
        <td><input type="text" name="telp"></td>
      </tr>
      <tr>
        <td>web</td>
        <td><input type="text" name="web"></td>
      </tr>
      <tr>
        <td>last_education</td>
        <td><input type="text" name="last_education"></td>
      </tr>
      <tr>
        <td>work_experience</td>
        <td><input type="text" name="work_experience"></td>
      </tr>
      <tr>
        <td>skills</td>
        <td><input type="text" name="skills"></td>
      </tr>
        <td></td>
        <td><button class="btn btn-success" type="submit" name="submit">Simpan</button></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $occupation = $_POST["occupation"];
    $city = $_POST["city"];
    $about = $_POST["about"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $telp = $_POST["telp"];
    $web = $_POST["web"];
    $last_education = $_POST["last_education"];
    $work_experience= $_POST["work_experience"];
    $skills = $_POST["skills"];

    //gunakan file config.php
    include_once("config.php");

    //ambil data dan simpan kedalam variabel result
    $result = mysqli_query($conn,"INSERT INTO cv_table (name, occupation, city, about, email, address, telp, web, last_education, work_experience, skills) VALUES('$name','$occupation','$city','$about','$email','$address','$telp','$web','$last_education','$work_experience','$skills')");

    //tampilkan pesan
    echo "User telah ditambahkan";
     
    
}
?>

</body>

</html>