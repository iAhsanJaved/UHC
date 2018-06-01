<?php
	include '../config.php';
	include '../UserAuthentication.php';
	$userAuth = new UserAuthentication($conn->getConnection());
	$userAuth->logout();
	header('Location: login.php');