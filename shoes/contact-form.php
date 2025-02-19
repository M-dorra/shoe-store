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
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $message=$_POST["message"];

$sql= "INSERT INTO review  VALUES ('$name','$email','$phone', '$message')";
$query= mysqli_query($db_conn,$sql);
?>
<div class="confirmation-message">
  <h2>Thank you for your feedback, <?php echo $name; ?>!</h2>
  <p>We will contact you at <?php echo $phone; ?> or at <?php echo $email; ?> shortly.</p>
</div>

</body>
</html>