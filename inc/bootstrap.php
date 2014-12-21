<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en" style="zoom: 100%;" class="<?php if(isset($page_class)) {echo($page_class);} ?>">
<head>
    <title><?php if(isset($page_title)) {echo($page_title);} ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=no" />

    <!--Styles-->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/styles.css" type="text/css"/>
    <!--End Styles-->

    <script type="text/javascript" src="<?php echo BASE_URL; ?>public/assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>public/assets/js/app.js"></script>
</head>