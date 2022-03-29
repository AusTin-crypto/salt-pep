<?php

session_start();
// header('location:login.php');
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
   
    $database = "tp";
   
     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password);
   
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
   }
   
    if($conn) {

        
        mysqli_select_db($conn,$database);




$name=$_GET['user'];
$pass=$_GET['password'];

$salt=generateRandomString();
$salted_pass=md5($pass.$salt);
$pepper=generateRandomString();
$peppered_pass=md5($salted_pass.$pepper);
$s=" select * from  usertable where name= '$name' ";


$result=mysqli_query($conn,$s);


$num=mysqli_num_rows($result);


if($num==1)
{
    echo"Username Already Taken";
}
else{

    $reg=" insert into usertable(name,password,salt) values ('$name','$peppered_pass','$salt')";
    $reg1=" insert into pepper(username,pepper) values ('$name','$pepper')";
    mysqli_query($conn,$reg);
    mysqli_query($conn,$reg1);
    echo "Registration Successful";
}
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
?>

