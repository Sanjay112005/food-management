<?php
$a=$_POST['names'];
$b=$_POST['emails'];
$c=$_POST['phones'];
$d=$_POST['messages'];
$doub=mysqli_connect('localhost','root','');
mysqli_select_db($doub,'hotel');
$cons=("insert into contacts(names,emails,phones,messages) values ('$a','$b','$c','$d')");
mysqli_query($doub,$cons);
echo("<script>");
echo('alert("message sent succesfully.....")');
echo("</script>");
include('contact.php');
mysqli_close($doub);
?>


