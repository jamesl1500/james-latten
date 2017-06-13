<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->title; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="<?php echo SITE_DESC; ?>">
    <meta name="keywords" content="<?php echo SITE_TAGS; ?>" />
    <meta name="robots" content="index,follow">
    <meta name="google-site-verification" content="TT96Zr2Z_YO-qdO8NNd7qYoTtSY_EAxr9fCyfP_JHQE" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo IMAGES; ?>logos/<?php echo SITE_LOGO; ?>" type="image/png">

    <!-- Main css file -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?><?php echo $this->device; ?>/v<?php echo $this->version; ?>/<?php echo ucwords($this->stylesheet); ?>.css"/>
</head>
<body>
<main class="website-main clearfix">
<nav class="mainNav">
	<ul class="innerMainNav container">
		<li><a href="<?php echo APP_URL; ?>index">Home</a></li>
		<li><a href="<?php echo APP_URL; ?>about_me">About Me</a></li>
		<li><a href="<?php echo APP_URL; ?>my_work">My Work</a></li>
		<li><a href="blog.jameslatten.me">Blog</a></li>
		<li style="margin-right: 0px;"><a href="<?php echo APP_URL; ?>contact_me">Contact Me</a></li>
	</ul>
</nav>
