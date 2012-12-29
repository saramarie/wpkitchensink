<?php global $post; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="bloginfo('charset');">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo wp_better_blog_title($post); ?></title>

    <!-- Replace description with theme options field later -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo THEME_CSS; ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo THEME_CSS; ?>/main.css">

    <script src="<?php echo THEME_JS; ?>/vendor/modernizr-2.6.2.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->