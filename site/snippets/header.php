<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?> 





</head>
<body class>

<!--  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    -->
    
    <div id="page-wrapper">

			<!-- Header  -->
				<div id="">

					
					<!-- 	<h1><div  id="logo"><?php echo $site->title()->html() ?></div></h1> -->
						
			
    
    
    
    <?php snippet('menu') ?>
  </header>