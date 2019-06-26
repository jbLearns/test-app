<?php
 
$conn = new mysqli("localhost", "jouie", "baclig", "crud_oop");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>