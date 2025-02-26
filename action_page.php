<?php
   var_dump($_POST);
   
   $FullName='';
   $Gender='';
   $Country='';
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="kurt_salonga_i201";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
$sql = "INSERT INTO Student_Record (ID, Full_Name, Gender, Country)
VALUES ('', '$FullName', '$Gender', '$Country')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>