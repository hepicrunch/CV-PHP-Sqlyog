<?php
if (isset($_POST["update"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $occupation = $_POST["occupation"];
  $city = $_POST["city"];
  $about = $_POST["about"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $telp = $_POST["telp"];
  $web = $_POST["web"];
  $education = $_POST["education"];
  $work_experience= $_POST["work_experience"];
  $skills = $_POST["skills"];

  //gunakan file config.php
  include_once("config.php");

  //update data menggunakan query
  $result = mysqli_query($conn, "UPDATE cv_table SET name='$name', occupation='$occupation', city='$city', about= '$about', email= '$email', address= '$address', telp= '$telp', web= '$web', education= '$education', work_experience= '$work_experience', skills= '$skills', WHERE id=$id");

  //redirect ke halaman index
  header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];

//gunakan file config.php
include_once("config.php");

//ambil data dan simpan kedalam variabel result
$result = mysqli_query($conn, "SELECT * FROM cv_table WHERE id=$id");

//masukan result ke variabel masing-masing
while ($row = mysqli_fetch_array($result)) {
  $name = $row["name"];
  $occupation = $row["occupation"];
  $city = $row["city"];
  $about = $row["about"];
  $email = $row["email"];
  $address = $row["address"];
  $telp = $row["telp"];
  $web = $row["web"];
  $last_education = $row["last_education"];
  $work_experience= $row["work_experience"];
  $skills = $row["skills"];
}
?>

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

  <form action="edit.php" method="post">
    <table class="table table-striped">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" value=<?php echo $name ?>></td>
      </tr>
      <tr>
        <td>Occupation</td>
        <td><input type="text" name="occupation" value=<?php echo $occupation ?>></td>
      </tr>
      <tr>
        <td>City</td>
        <td><input type="text" name="city" value=<?php echo $city ?>></td>
      </tr>
      <tr>
      <tr>
        <td>About</td>
        <td><input type="text" name="about" value=<?php echo $about ?>></td>
      </tr>
      <tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" value=<?php echo $email ?>></td>
      </tr>
      <tr>
      <tr>
        <td>Address</td>
        <td><input type="text" name="address" value=<?php echo $address ?>></td>
      </tr>
      <tr>
      <tr>
        <td>Telp</td>
        <td><input type="text" name="telp" value=<?php echo $telp ?>></td>
      </tr>
      <tr>
      <tr>
        <td>Web</td>
        <td><input type="text" name="web" value=<?php echo $web ?>></td>
      </tr>
      <tr>
      <tr>
        <td>Last_Education</td>
        <td><input type="text" name="last_education" value=<?php echo $last_education ?>></td>
      </tr>
      <tr>
        <td>Work_Experience</td>
        <td><input type="text" name="work_experience" value=<?php echo $work_experience ?>></td>
      </tr>
      <tr>
      <tr>
        <td>Skills</td>
        <td><input type="text" name="skills" value=<?php echo $skills ?>></td>
      </tr>
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'] ?>></td>
        <td><button class="btn btn-success" type="submit" name="update">Update</button></td>
      </tr>
    </table>
  </form>

</body>

</html>
