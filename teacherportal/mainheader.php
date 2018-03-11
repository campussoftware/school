<?php
session_start();
include 'inc/functions.php';
if(!isset($_SESSION['teacherportal'])) 
{
	header("location: index.php");
}
$teacherData=$_SESSION['teacherportal'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Admin Template</title>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/toggle-tabs.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/media_querys.css">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row">
  <section class="container_body">