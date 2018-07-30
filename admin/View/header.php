<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/admin/Assets/favicon.ico">

    <title>Админ-панель</title>

    <!-- Bootstrap core CSS -->
    <link href="/admin/Assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/admin/Assets/css/dashboard.css" rel="stylesheet">

</head>
<body>
<div id="main-background" class="main-background"/>
<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/admin/">Admin CMS</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">

                    <?php foreach (Customize::instance()->getAdminMenuItems()as $key => $item): ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $item['urlPath'] ?>">
                                <i class="<?= $item['classIcon'] ?>"></i>
                                    <?= $lang->dashboardMenu[$key] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="right-toolbar"><?= $_SESSION['auth_user']['user_name'] . ' ' . $_SESSION['auth_user']['user_lastname'] ?>
                <a href="/admin/logout/">
                    <i class="ico-logout"></i> <?= $lang->dashboardMenu['logout'] ?>
                </a>
            </div>
        </div>
    </nav>
</header>