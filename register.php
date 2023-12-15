<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="toll";
$conn = new mysqli($servername, $username, $password, $dbname);
echo 'Connected successfully<br/>';
$stmt = $conn->prepare("INSERT INTO toll(firstname,age,vehicleno,payment) VALUES(?,?,?,?)");
$stmt->bind_param("siii", $n, $a, $v, $p);
$n=$_POST["firstname"];
$a=$_POST["age"];
$v=$_POST["vehicleno"];
$p=$_POST["payment"];
$stmt->execute();
 echo "Record inserted successfully we will mail you regarding hotel booking.Kindly be Patient";
$stmt->close();
$conn->close();
header("refresh:3; url=register.html");
?>