<?php
$servername="localhost";
$username="root";
$password="";
$dbname="exam";
$conn = new mysqli($servername,$username,$password,$dbname);
echo 'Connected';
$stmt = $conn->prepare("INSERT INTO exam1(firstname,regno) VALUES(?,?)");
$stmt->bind_param("si",$f,$r);
$f=$_POST["firstname"];
$r=$_POST["regno"];
$stmt->execute();
echo 'Connected';
$stmt->close();
$conn->close();
header("refresh:3;url=exam.html");
?>

