<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Cabinet',

	// preloading 'log' and 'mail' component
	'preload'=>array('log', 'mail'),

    'sourceLanguage' => 'en',
    'language'=>'en',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
        'application.modules.user.models.*',
		'application.components.*',
        'application.modules.user.components.*',
	),

	'defaultController'=>'site/index',
    'modules'=>array(
		'user' => array(
			'tableUsers' => 'users',
			'tableProfiles' => 'profiles',
			'tableProfileFields' => 'profiles_fields',
		)
    ),
	// application components
	'components'=>array(
		'user'=>array(
			'allowAutoLogin' => true
		),

		'db'=>require(dirname(__FILE__).'/database.'.ENVIRONMENT.'.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'urlManager'=>array(
			'class'=>'application.components.LangUrlManager',
			'languages'=>array('ru','en'),
			'urlFormat'=>'path',
			'showScriptName'=>true,
			'rules'=>array(
				'<lang:(ru|en)>' => '',
                '<lang:(ru|en)>/<module:\\w+>/<controller:\\w+>/<action:\\w+>' => '<module>/<controller>/<action>',
                '<lang:(ru|en)>/<module:\\w+>/<controller:\\w+>' => '<module>/<controller>',
                '<lang:(ru|en)>/<module:\\w+>' => '<module>',
				'<lang:(ru|en)>/<_c>/<_a>' => '<_c>/<_a>',
				'<lang:(ru|en)>/<_c>' => '<_c>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);