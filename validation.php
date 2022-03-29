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

    if($conn) {
    mysqli_select_db($conn,$database);
$name=$_GET['user'];
$pass=$_GET['password'];
// echo"'$con'";
// echo"'$pass'";
$sa=" select salt from  usertable where name= '$name' ";
$r=mysqli_query($conn,$sa);
$salt=mysqli_fetch_array($r);
$salted_pass=md5($pass.$salt[0]);
$pe=" select pepper from  pepper where username= '$name' ";
$res=mysqli_query($conn,$pe);
$pepper=mysqli_fetch_array($res);
$peppered_pass=md5($salted_pass.$pepper[0]);
$s=" select * from  usertable where name= '$name' && password= '$peppered_pass' ";


$result=mysqli_query($conn,$s);
// echo "THis is '$result'";

$num=mysqli_num_rows($result);

// echo"'$num'";

if($num==1)
{
    $_SESSION['username']=$name;
    header('location:home.php');
   
}
else{
    echo $pepper[0];
    // echo $peppered_pass;

    // header('location:login.php');

}
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
?>

