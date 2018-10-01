<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
 table, td, th {
    border: 2px solid black;
}
 th {text-align: left;}
</style>
</head>
<body>
 <?php
 
 require("connect.php");
$sql="SELECT * FROM details";
$res = $conn->query($sql);
?>
<table>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
</tr>
<?php
while($row = $res->fetch_array()) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Phone'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
}
?></table>
<button value="home" onclick="window.location.href='webpage.php';">Home</button>
</body>
</html> 