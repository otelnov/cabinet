<?php
require_once(dirname(__FILE__).'/env.php');
$yii=dirname(__FILE__).'/yii/yii.php';
$config = dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config);

$runner=new CConsoleCommandRunner();
$runner->commands=array(
    'migrate' => array(
        'class'=>'system.cli.commands.MigrateCommand',
        'migrationPath'=>'application.migrations',
        'migrationTable'=>'migrations',
        'connectionID'=>'db',
        'templateFile'=>'application.migrations.template',
    ),
);

ob_start();
$runner->run(array(
    'yiic',
    'migrate',
	'--interactive=0',
));
echo htmlentities(ob_get_clean(), null, Yii::app()->charset);