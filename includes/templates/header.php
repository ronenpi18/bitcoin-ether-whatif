<?php

if(isset($page_var)) {
    $page_info['title']  = $site_config['website_name'] . ' - ' . $page_var['title'];
    $page_info['description'] = $page_var['description'];
    $page_info['url'] = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $page_info['image'] = $site_config['website_url'] . '/assets/img/' . $page_var['img'];
} else {
    $page_info['title']  = $site_config['default_title'];
    $page_info['description'] = $site_config['default_description'];
    $page_info['url'] = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $page_info['image'] = $site_config['website_url'] . '/assets/img/' . $site_config['default_image'];
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_info['title']; ?></title>
    <meta name="description" content="<?php echo $page_info['description']; ?>">
    <!-- Opengraph Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $page_info['title']; ?>" />
    <meta property="og:description" content="<?php echo $page_info['description']; ?>" />
    <meta property="og:url" content="<?php echo $page_info['url']; ?>" />
    <meta property="og:image" content="<?php echo $page_info['image']; ?>" />
    <meta property="og:image:width" content="150" />
    <meta property="og:image:height" content="150" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $page_info['title']; ?>" />
    <meta name="twitter:description" content="<?php echo $page_info['description']; ?>" />
    <meta property="twitter:url" content="<?php echo $page_info['url']; ?>" />
    <meta property="twitter:image" content="<?php echo $page_info['image']; ?>" />
    <!-- Images -->
    <link rel="icon" href="<?php echo $site_config['website_url']; ?>/assets/img/favicon.png" />
    <!-- External CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo  $site_config['website_url']; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url(//fonts.googleapis.com/earlyaccess/opensanshebrew.css);
    </style>
    <!-- Custom CSS -->
    <link href="<?php echo  $site_config['website_url']; ?>/assets/css/ember.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Google Analytics -->

</head>

<body>

<div class="site-wrapper" style="direction: rtl;">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><a href="<?php echo $site_config['website_url']; ?>"><?php echo $page_info['title']; ?></a></h3>
                    <!-- <nav>
              <ul class="nav masthead-nav">
                <li class="active"><a href="<?php echo $site_config['website_url']; ?>">כמה ביטקוין?</a></li>
                <li><a href="#" data-toggle="modal" data-target="#">הסבר</a></li>
              </ul>
            </nav>
			-->
                </div>
            </div>