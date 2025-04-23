<?php
   // Display POST data for debugging
   echo "<pre>";
   var_dump($_POST);
   echo "</pre>";
   echo "<br><br>";

   // Get the form data
   $Full_Name = $_POST['Name'];
   $Gender = $_POST['Gender'];
   $Country = $_POST['Country'];
?>

<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "kurt_salonga_i201";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
?>

<?php
// Prepare SQL query to insert data securely using prepared statements
$sql = $conn->prepare("INSERT INTO Student_Record (Full_Name, Gender, Country) VALUES (?, ?, ?)");
$sql->bind_param("sss", $Full_Name, $Gender, $Country); // "sss" means three strings

// Execute query and check for success
if ($sql->execute() === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql->error;
}

// Close connection
$sql->close();
$conn->close();
?>
