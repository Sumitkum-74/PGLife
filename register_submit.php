<?php
     $db_hostname="127.0.0.1";
     $db_username="root";
     $db_password="";
     $db_name="rest";
   $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
   if(!$conn){
     echo "failed to connect".mysqli_connect_error();
     exit;
   }
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
 
$sql="insert into users (name, email, password) values('$name','$email','$password')";

$result=mysqli_query($conn,$sql);
if(!$result){
     echo "error!".mysqli_error($conn);
     exit;
}
echo "Registration Successful";
mysqli_close($conn);
?>