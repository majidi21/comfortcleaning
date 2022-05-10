<?php
include_once 'dbh.inc.php';
$name = $_POST['fullname'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$package = $_POST['package'];
$service = $_POST['service'];
$date = $_POST['date'];
$other = $_POST['other'];
$sql = "INSERT INTO users(full_name, phone_number, locationn, gender, package, servicee, start_datee, other) VALUE('$name', '$phone', '$location', '$gender', '$package', '$service', '$date', '$other');";
mysqli_query($conn, $sql);

header("Location: index.html?signup=Success");
?>