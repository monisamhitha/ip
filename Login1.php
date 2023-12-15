<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="toll";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn) {

 die('Could not connect: '.mysqli_connect_error());

} 
echo 'Connected successfully<br/>';
$n=$_POST["firstname"];
$v=$_POST["vehicleno"];
$sql = "SELECT firstname, vehicleno FROM toll where firstname= '{$n}' "; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if ($row["firstname"]== $n && $row["vehicleno"]==$v)
       {
           echo "You have been successfully Validated";
   }
else
{ 
  echo "Credentials Wrong, Try again";
}
}
}
else
 {
   echo "User name given was not exist";
}
$conn->close();
  header("refresh:2; url=register.html");
?>