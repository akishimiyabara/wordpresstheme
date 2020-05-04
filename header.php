<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</head>
<body>
    <header>
        <div class="header_title">
            <h1><a href="<?php echo home_url(); ?>" class="anchor"><?php bloginfo('name'); ?><i class="fas fa-heart" style="color:pink;"></i></a></h1>
        </div>
    </header>