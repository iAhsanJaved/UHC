<?php 

	require '../../config.php';
	include '../../UserAuthentication.php';
	
	$userAuth = new UserAuthentication($conn->getConnection());
	if (!$userAuth->isAuthenticated()) {
    	header('Location: ../../dashboard/login.php');
  	}
	include '../../SiteSlide.php';

	$siteslide = new SiteSlide($conn->getConnection());
	$row = $siteslide->getSlideByID($_REQUEST['slide_id']);
	if ($row) {
		extract($row);
		$slide = array(
			'slide_id' => $slide_id,
			'slide_title' => $slide_title,
    		'slide_img' => $slide_img,
		);

		$json_Response = json_encode($slide);
	}

	echo $json_Response;
		
	

