<?php
	$host='localhost';
    $user='root';
    $pass='';
    $db='svwa'; 
    $con=mysqli_connect($host,$user,$pass,$db) or die(mysql_error());

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnum = $_POST['pnum'];
    $message = $_POST['message'];

    $sql="INSERT INTO `contact_db`(`id`, `name`, `email`, `pnum`, `message`) VALUES (NULL,'$name','$email','$pnum','$message')";
    $query=mysqli_query($con,$sql);

    header('location:index.php');
?>