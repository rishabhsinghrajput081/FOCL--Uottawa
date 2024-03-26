<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tutorials";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = " SELECT ID, Name, Family, Phone FROM users";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
	echo "ID: ".$row['ID'] . "Name: ".$row['Name']. "Family: ".$row['Family']. "Phone: ".$row['Phone'] . "<br>";
}

}


?>
