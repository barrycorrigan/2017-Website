<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
        if (perch_layout_has('blog-post')) {

            perch_blog_post_meta(perch_get('s'));

        } else {

            echo '<title>' . perch_pages_title(true) . '</title>';

            $domain        = 'http://'.$_SERVER["HTTP_HOST"];
            $url           = $domain.$_SERVER["REQUEST_URI"];
            $sitename      = "Barry Corrigan - Front End Designer";
            $twittername   = "@barrycorrigan";
            $sharing_image = '/assets/img/default_image.jpg';

            PerchSystem::set_var('domain',$domain);
            PerchSystem::set_var('url',$url);
            PerchSystem::set_var('sharing_image',$sharing_image);
            PerchSystem::set_var('twittername',$twittername);
        	PerchSystem::set_var('sitename',$sitename);

        	perch_page_attributes();

        }
    ?>

	<link rel="alternate" type="application/rss+xml" title="The workings of Barry Corrigan" href="/rss.xml">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

	<!-- Stylesheets and Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5da99e">
    <meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="/assets/css/main.css" />

</head>
<body>
    <main>
