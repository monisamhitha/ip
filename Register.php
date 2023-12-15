<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="banking";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn) {

 die('Could not connect:' .mysqli_connect_error());

}
echo 'Connected successfully<br/>';
$stmt = $conn->prepare("INSERT INTO customer(firstname, lastname, username, password, gender, city) VALUES(?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $f, $l, $u, $p, $g, $c);
$f=$_POST["firstname"];
$l=$_POST["lastname"];
$u=$_POST["username"];
$p=$_POST["password"];
$g=$_POST["gender"];
$c=$_POST["city"];
$stmt->execute();
 echo "Record inserted successfully";
$stmt->close();
$conn->close();
header("refresh:3; url=home.html");
?>