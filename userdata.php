<?php

$con = mysqli_connect('localhost:3306','root'); //password will be updated later 

if($con){
	echo "connection_succussful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'userrequests'); //userrequests db used

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

// userinfodata table used in db
$query = " insert into  userinfodata (user, email, mobile, comment) values ('$name', '$email','$mobile','$comments')  ";  

mysqli_query($con, $query);

header('location: index.php');

?>