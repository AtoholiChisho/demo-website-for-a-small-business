<?php

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "connection successful";
}else{
    echo "No Connection";
}


mysqli_select_db($con, 'feedbackdata');

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$query = "insert into userfeed(user, email, msg) values ('$name','$email','$msg')";



mysqli_query($con, $query);
header('location:index.html');


?>