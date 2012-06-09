<?php
require_once(dirname(__FILE__).'/env.php');

$yii=dirname(__FILE__).'/yii/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';
require_once($yii);
Yii::createWebApplication($config)->run();