<?php
  require '../config.php';
  include '../SiteInfo.php';
  include '../UserAuthentication.php';

  $siteinfo = new SiteInfo($conn->getConnection());
  $userAuth = new UserAuthentication($conn->getConnection());

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $siteinfo->info['site_name'] ?> - Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo $siteinfo->info['site_url'] ?>/dashboard/assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">

