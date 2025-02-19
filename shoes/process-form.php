<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.confirmation-message {
  background-color: #e6ffe6;
  border: 1px solid #99ff99;
  border-radius: 5px;
  padding: 20px;
  margin: 20px 0;
  text-align: center;
}

.confirmation-message h2 {
  font-size: 24px;
  margin-bottom: 10px;
}
</style>
</head>
<body>
<?php
 

$db_conn =mysqli_connect("localhost", "root", "", "shoe_store");
$name = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$zipcode = $_POST["zipcode"];
$quantity = $_POST["quantity"];
$size = $_POST["size"];
$country = $_POST["country"];
$sexe = $_POST["sexe"];
$shoe=$_POST["shoe"];

$sql1= "INSERT INTO client  VALUES ('$name','$email','$phone', '$zipcode',$quantity,$size,'$country','$sexe')";
$sql2= "INSERT INTO purchase  VALUES ('$name','$shoe','$phone')";
$query1 = mysqli_query($db_conn, $sql1);
$query2 = mysqli_query($db_conn, $sql2);

?>
<div class="confirmation-message">
  <h2>Thank you for submitting the form, <?php echo $name; ?>!</h2>
  <p>We will contact you at <?php echo $phone; ?> shortly.</p>
</div>

</body>
</html>