<?php

$servername = "localhost";
$username = "username";
$password = "password";
$NAME=filter_input(INPUT_POST,'NAME');
$FATHER_NAME=filter_input(INPUT_POST,'FATHER_NAME');
$ENROLLMENT_NO.=filter_input(INPUT_POST,'ENROLLMENT_NO');
$DOB=filter_input(INPUT_POST,'DOB');
$MOBILE_NO.=filter_input(INPUT_POST,'MOBILE_NO.');
$ADDRESS=filter_input(INPUT_POST,'ADDRESS');
$EMAIL_ID=filter_input(INPUT_POST,'EMAIL_ID');


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
 $sql ="INSERT INTO id_card(NAME,FATHER_NAME,ENROLLMENT_NO,DOB,MOBILE_NO.,ADDRESS,EMAIL_ID)" ;
if ($conn->query($sql) === TRUE) {
	echo "New record is inserted successfully";
    } 
else{ 
    echo "Error creating database: " . $conn->error;
}

$conn->close();
}
?>