<?php
require "./connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
$c_pass=$_POST['con_password'];

if($c_pass==$pass){
    $regi=$conn->prepare("insert into student(name,email,phone_number,password) values(?,?,?,?)");
    $regi->bind_param("ssis",$name,$email,$phone,$pass);

    $regi->execute();
    $regi->close();
    $conn->close();
    header('location: ../index.php');}
?>