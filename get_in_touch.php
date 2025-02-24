<?php
require "./connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sub=$_POST['subject'];
$msg=$_POST['msg'];

if(isset($_POST['email'])){
    $regi=$conn->prepare("insert into get_in_touch(name,email,number,subject,msg) values(?,?,?,?,?)");
    $regi->bind_param("sssss",$name,$email,$phone,$sub,$msg);
    $regi->execute();
    $regi->close();
    $conn->close();
    }
    else{
        die("didnt give email");
    }
?>