<?php

	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: Login");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: Home");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: Login");
		exit;
	}