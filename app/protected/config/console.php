<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Cabinet',
    'components'=>array(
		'db'=>require(dirname(__FILE__).'/database.'.ENVIRONMENT.'.php'),
	),

	'commandMap'=>array(
        'migrate'=>array(
            'class'=>'system.cli.commands.MigrateCommand',
            'migrationPath'=>'application.migrations',
            'migrationTable'=>'migrations',
            'connectionID'=>'db',
            'templateFile'=>'application.migrations.template',
        ),
    ),
);