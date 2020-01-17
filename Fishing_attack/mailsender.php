<?php
$from="testatacker@testatacker.com";
$to=$_POST['tomail'];
$lnk= '<a href="https://vesotest.000webhostapp.com/LinkedIn.html">Update LinkedIn Profile</a>';
$message="Dear Mr John we are from LinkedIn Support and we want to remind you that you must update your LinkedIn account + $lnk";
$headers="From $from";
$subject="LinkedIn Profile Update";
mail($to,$subject,$message,$headers);
echo 'Message was sent';
?>
