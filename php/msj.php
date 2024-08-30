<?php 
if($_GET){
	$message=$_GET['message'];
	$msjl=str_replace(" ", "%20", $message);
	header("location:https://api.whatsapp.com/send?phone=584121223594&text=".$msjl);
}
?>