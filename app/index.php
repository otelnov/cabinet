<?php
require_once(dirname(__FILE__).'/env.php');

$yii=dirname(__FILE__).'/yii/yii.php';
$global=dirname(__FILE__).'/protected/components/global.php';
$config = dirname(__FILE__).'/protected/config/main.php';
require_once($global);
require_once($yii);
Yii::createWebApplication($config)->run();