<?php
ini_set("display_errors",1);

@error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);


define('ROOT_DIR', __DIR__);

define('ENV', 'Cms');
define('DS', DIRECTORY_SEPARATOR);

require_once 'engine/Bootstrap.php';