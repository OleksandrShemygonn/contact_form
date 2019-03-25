<?php

require("Add.php");

$firstName = $_GET['email'];
$secondName = $_GET['name'];
$thirdName = $_GET['phone'];
$fourthName = $_GET['message'];



$sql = "INSERT INTO contact forms (email, name, phone, masseg) VALUES ('$firstName','$secondName', '$thirdName', '$fourthName')";
$sql2 = "SELECT email, name, phone, massege";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows>0){
	while($row = $result2->fetch_assoc()) {
		 echo "email: ".$row['email']." name: ".$row['name']." phone: ".$row['phone']."message: ".$row['massage']."<br />";
	}
}
else{
    echo "not found!";
}
		 

?>