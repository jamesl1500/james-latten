<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->title; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="<?php echo SITE_DESC; ?>">
    <meta name="keywords" content="<?php echo SITE_TAGS; ?>" />
    <meta name="robots" content="index,follow">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo IMAGES; ?>logos/<?php echo SITE_LOGO; ?>" type="image/png">

    <!-- Main css file -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?><?php echo $this->device; ?>/v<?php echo $this->version; ?>/<?php echo ucwords($this->stylesheet); ?>.css"/>
</head>
<body>
<div class="website-main clearfix">

