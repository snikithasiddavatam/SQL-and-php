<?php
$servername = "localhost";
$username = "u323297349_login";
$db_name = "u323297349_login";
$password = "6789012456";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "INSERT INTO users (fname, lname) values ('p', 'h')";
$result=$conn->query($sql);
if($result){
    echo 'SUCCESS';
}else{
    echo 'failed';
}
?>