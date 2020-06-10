<?php

$name = '';
$email='' ;
$phone ='';
$message = '';


$servername='localhost';
$username='root';
$password='';
$dbname = "powerswitch";

$db=mysqli_connect($servername,$username,$password,$dbname);

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
         header('Location: ../contact_success.php');
     }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
     };
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

if(isset($_POST['order']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $product = $_POST['product'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $depth = $_POST['depth'];
    $date = date('Y-m-d H:i:s');
    $panel_description = $_POST['panel_description'];
    $wiring_description = $_POST['wiring_description'];
    $note = $_POST['note'];
    $query = "INSERT INTO tbl_order (name,email,phone,subject,product,width,height,
    depth,panel_description,wiring_description,note,date) VALUES ('$name','$email','$phone','$subject','$product','$width',
    '$height','$depth','$panel_description','$wiring_description','$note','$date')";

    if(mysqli_query($db,$query))
    {
        header('Location: ../order_success.php');
    }else{
        echo "Somethings wrong" .mysqli_error($db);
    }
    
    
    exit();
}




 $result_contact = mysqli_query($db,"SELECT * FROM contact");
 $result_order = mysqli_query($db,"SELECT * FROM tbl_order");
 $result_subscribe = mysqli_query($db,"SELECT * FROM subscribe");


?>