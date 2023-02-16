<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$gender=$_POST['gender'];
$con =@mysqli_connect('localhost','root','',"ptdata");
$query = "insert into pttable values('$firstname','$lastname','$email','$phone','$password','$repassword','$gender')";
$result = mysqli_query($con,$query);