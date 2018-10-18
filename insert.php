<?php
include("db_conn.php");


$name = test_input($_POST['name']);
$lastname = test_input($_POST['lastname']);
$rollno = test_input($_POST['rollno']);
$branch = test_input($_POST['branch']);
$semester = test_input($_POST['semester']);
$email = test_input($_POST['email']);
$phone = test_input($_POST['phone']);
$password = $_POST['pass'];
$password = password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));

$res = "INSERT INTO signup (firstname,lastname,rollno,branch,semester,email,phone,password) VALUES('$name','$lastname','$rollno','$branch','$semester','$email','$phone','$password')";

if(mysqli_query($conn,$res)){
    echo "one record inserted";
    mysqli_close($conn);
}
else{
     die("failed".mysqli_error($conn));
    echo "failed";
}

function test_input($data){
    $data= trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}


?>