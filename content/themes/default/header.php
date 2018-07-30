<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=\Engine\Core\Config\Config::item(baseUrl) ?>/content/themes/default/favicon.ico">
    <title><?php Theme::title() ?></title>
    <?php Asset::render('css'); ?>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?=\Engine\Core\Config\Config::item(baseUrl) ?>">
                <?php echo Setting::get('name_site'); ?>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
	            
	
	            <?php $dev = 2;  if (\Engine\Core\Auth\Auth::hashUser() == null)  $dev = 1?>
	            <?php foreach(Menu::getItems($dev) as $item):?>
		            <li>
			            <a href="<?= $item->link ?>"><?= $item->name ?></a>
		            </li>
	            <?php endforeach; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Header -->
<header class="intro-header" style="background-image: url('<?php echo \Engine\Core\Template\Theme::getUrl() ?>/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php echo Setting::get('name_site'); ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php echo Setting::get('description'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>