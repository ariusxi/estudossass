<?php
	require_once "config.php";
	if(!isset($_SESSION['id_user'])){
		include "logar.php";
		exit;
	}else{
		if(isset($_GET['sair'])){
			unset($_SESSION['id_user']);
			session_destroy();
			echo "<script>location.href='".BASE."';</script>";
		}
	}
?>