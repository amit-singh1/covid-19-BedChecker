<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: index1.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index1.php");
}
?>