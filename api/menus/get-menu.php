<?php 

	require '../../config.php';
	include '../../UserAuthentication.php';
	
	$userAuth = new UserAuthentication($conn->getConnection());
	if (!$userAuth->isAuthenticated()) {
    	header('Location: ../../dashboard/login.php');
  	}
	include '../../SiteMenu.php';

	$sitemenu = new SiteMenu($conn->getConnection());
	$row = $sitemenu->getMenuByID($_REQUEST['menu_id']);
	if ($row) {
		extract($row);
		$menu = array(
			'menu_id' => $menu_id,
			'menu_name' => $menu_name,
    		'menu_url' => $menu_url,
    		'menu_location' => $menu_location,
		);

		$json_Response = json_encode($menu);
	}

	echo $json_Response;
		
	

