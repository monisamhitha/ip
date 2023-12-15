<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="students";
if ($_POST)
{
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM student WHERE rollno =".$_POST["reg"];
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo "Name: " . $row["name"]. " - Roll no: " . $row["rollno"]. " -Gender: " . $row["gender"]."- Age: " .$row["age"]. "<br>";
}
}
?>
