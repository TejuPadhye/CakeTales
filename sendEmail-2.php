<?php
if(isset($_POST['submit'])){
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
header('Location: thank_you.php');
}
?>