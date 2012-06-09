<?php

$environment = include dirname(__FILE__).'/protected/config/environment.php';

if(file_exists(dirname(__FILE__).'/ENVIRONMENT')) {
    $id = trim(@file_get_contents(dirname(__FILE__).'/ENVIRONMENT'));
    define('ENVIRONMENT', $id);
} elseif(isset($_SERVER['HTTP_HOST'])) {
    foreach ($environment as $id=>$params)
    {
        if (false !== array_search($_SERVER['HTTP_HOST'], $params['hosts']))
        {
            define('ENVIRONMENT', $id);

        }
    }
}

defined('ENVIRONMENT') || die('Please set up ENVIRONMENT');

defined('YII_DEBUG') || define('YII_DEBUG', (@$_SERVER['REMOTE_ADDR']===@$_SERVER['SERVER_ADDR'])
        || in_array(ENVIRONMENT, array('dev', 'test')));

(!defined('YII_TRACE_LEVEL') && YII_DEBUG) && define('YII_TRACE_LEVEL',3);