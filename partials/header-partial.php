<?php 
	header('X-UA-Compatible: IE=edge,chrome=1');

  // autoload mustache templating system and declare template directory
  require_once 'vendor/autoload.php';

  $mustache = new Mustache_Engine(array(
     'loader' => new Mustache_Loader_FilesystemLoader('templates')
  ));
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Ryan Johnston - Web Developer</title>

  <meta name="description" content="Personal portfolio website for Ryan Johnston (aka Johnstonian)">
  <meta name="author" content="Ryan Johnston">
  <meta name="keywords" content="portfolio, web development, cv, resume">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />

  <link type="text/plain" rel="author" href="humans.txt" />

  <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/style.min.css">

  <!--[if lt IE 9]>
  	<link rel="stylesheet" type="text/css" href="css/ie-styles.css">
		<script type="text/javascript" src="js/iehacks/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/iehacks/respond.min.js"></script>
	<![endif]-->

</head>
<body>