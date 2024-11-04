<?php
$a = $_POST['names'];
$b = $_POST['emails'];
$c = $_POST['phones'];
$d = $_POST['messages'];

$doub = mysqli_connect('localhost', 'root', '', 'pro');

if (!$doub) {
    die("Connection failed: " . mysqli_connect_error());
}

$cons = "INSERT INTO complaint (names, emails, phones, messages) VALUES ('$a', '$b', '$c', '$d')";
if (mysqli_query($doub, $cons)) {
    echo "<script>alert('Message sent successfully');</script>";
} else {
    echo "Error: " . mysqli_error($doub);
}

mysqli_close($doub);
include('contact.php');
?>
