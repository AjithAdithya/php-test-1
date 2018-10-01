<html>
    <head>
</head>
    <body>
        <form action="delete.php" method="post">
        Enter the email of the data to be deleted<input type="text" name="emailf"><br>
        <input type="submit"><br>
        
</form>
<button value="home" onclick="window.location.href='webpage.php';">Home</button>
</body>
</html>
<?php
require("connect.php");
$email=$_POST["emailf"];
$conn->query("DELETE FROM details WHERE email='$email'");
?> 