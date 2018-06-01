<?php 

	require '../../config.php';
	include '../../UserAuthentication.php';
	
	$userAuth = new UserAuthentication($conn->getConnection());
	if (!$userAuth->isAuthenticated()) {
    	header('Location: ../../dashboard/login.php');
  	}
	include '../../User.php';

	$user = new User($conn->getConnection());
	$row = $user->getUserByID($_REQUEST['user_id']);
	if ($row) {
		extract($row);
		$user = array(
			'user_id' => $user_id,
			'name' => $name,
    		'username' => $username,
    		'email' => $email,
    		'user_type_title' => $user_type_title,
    		'created_on' => $created_on,
			'modified_on' => $modified_on
		);

		$json_Response = json_encode($user);
	}

	echo $json_Response;
		
	

