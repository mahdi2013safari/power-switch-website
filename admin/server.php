<?php

$name = '';
$email='' ;
$phone ='';
$message = '';


$servername='localhost';
$username='root';
$password='';
$dbname = "powerswitch";

$db=mysqli_connect($servername,$username,$password,"$dbname");
if(!$db){
   die('Could not Connect My Sql:' .mysql_error());
}

 
 if(isset($_POST['submit']))
 {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];
     $date = date('Y-m-d H:i:s');
    
     $query = "INSERT INTO contact (name,phone,email,message,date) VALUES ('$name','$phone','$email','$message','$date')";
     if(mysqli_query($db,$query))
     {
         echo " new record successfully created ";
     }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
     };
    //  header('location: ../index.php');
     exit();
 }

if(isset($_POST['subscribe']))
{

    $email_subscribe = $_POST['email_subscribe'];
    $date = date('Y-m-d H:i:s');
    $query = "INSERT INTO subscribe (email,date) VALUES ('$email_subscribe','$date')";
    mysqli_query($db,$query);
    header('location: index.php');
    exit();
}




 $result = mysqli_query($db,"SELECT * FROM contact");


?>