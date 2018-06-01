<?php

include 'SiteInfo.php';
include 'SiteMenu.php';

$siteinfo = new SiteInfo($conn->getConnection());
$sitemenu = new sitemenu($conn->getConnection());
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteinfo->info['site_name'] ?> - <?php echo $siteinfo->info['site_description'] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--
	<meta name="description" content="The most popular HTML, CSS, and JS library in the world.">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.7.3">

	-->
	<link rel="stylesheet" type="text/css" href="<?php echo $siteinfo->info['site_url'] ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $siteinfo->info['site_url'] ?>/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $siteinfo->info['site_url'] ?>/assets/css/main.css">
</head>
<body>

<div class="main-wrapper">

	<?php include 'top-header.php'; ?>

	<?php include 'main-nav.php'; ?>	

	<main id="main-content">
