<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(__DIR__) . DS);

defined('LIB_PATH') ? null : define('LIB_PATH', __DIR__ . DS);

require_once(LIB_PATH.'config.php');

require_once(LIB_PATH.'functions.php');
require_once(LIB_PATH.'Page.php');