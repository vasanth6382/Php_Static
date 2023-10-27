<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$rate = $_POST['stars'];


$host = "localhost";
$user = "root";
$password = "welcome";
$db = "feedback";

$conn = new mysqli($host,$user,$password,$db );

if ($conn-> connect_error){
    echo "failed";
}
else {
    print "Connection suceed.<br>";
    echo "<script> alert('connection sucessfully ') </script><br>";
}
$sql = "INSERT INTO tbls (firstname, rating, email)
VALUES ('$name', '$rate', '$mail')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>