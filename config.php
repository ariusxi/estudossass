<?php
	session_start();
	define("BASE", "http://localhost/teste");
	$pdo = new PDO('mysql:host=localhost;dbname=teste','root','');
	$pdo->exec("set names utf8");
?>