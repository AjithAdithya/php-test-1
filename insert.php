<?php 
require 'connect.php'?>

<?php
$namea = $email1 = $phone1 ="";
$nameb = $email2 = $phone2 ="";
$namec = $email3 = $phone3 ="";
$named = $email4 = $phone4 ="";
$namee = $email5 = $phone5 ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $namea = test_input($_POST["namea"]);
  $email1 = test_input($_POST["email1"]);
  $phone1= test_input($_POST["phone1"]);
  $nameb = test_input($_POST["nameb"]);
  $email = test_input($_POST["email2"]);
  $phone2= test_input($_POST["phone2"]);
  $namec = test_input($_POST["namec"]);
  $email3 = test_input($_POST["email3"]);
  $phone3= test_input($_POST["phone3"]);
  $named = test_input($_POST["named"]);
  $email4 = test_input($_POST["email4"]);
  $phone4= test_input($_POST["phone4"]);
  $namee= test_input($_POST["namee"]);
  $email5 = test_input($_POST["email5"]);
  $phone5= test_input($_POST["phone5"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
$namea= $_POST["namea"];
$phone1 = $_POST["phone1"];
$email1 = $_POST["email1"];
$nameb = $_POST["nameb"];
$phone2 = $_POST["phone2"];
$email2 = $_POST["email2"];
$namec = $_POST["namec"];
$phone3 = $_POST["phone3"];
$email3 = $_POST["email3"];
$named = $_POST["named"];
$phone4 = $_POST["phone4"];
$email4 = $_POST["email4"];
$namee = $_POST["namee"];
$phone5 = $_POST["phone5"];
$email5 = $_POST["email5"];

$sql = "INSERT INTO details (Name , Phone, Email)
VALUES ('$namea', '$phone1', '$email1'),('$nameb', '$phone2', '$email2'),('$namec', '$phone3', '$email3'),('$named', '$phone4', '$email4'),('$namee', '$phone5', '$email5')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
  <body>
    <button value="back" onclick="window.location.href='insert.html';">BACK</button>
</body>
</html>