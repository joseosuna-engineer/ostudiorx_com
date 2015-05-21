<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
define('GII_MODULE_PASS',getenv('GII_MODULE_PASS'));
define('GII_MODULE_IP',getenv('GII_MODULE_IP'));
define('ADMIN_EMAIL',getenv('ADMIN_EMAIL'));
 
$CONNECTION_STRING = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT;
      
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Chacao',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>GII_MODULE_PASS,
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array(GII_MODULE_IP,'::1'),
		),
		
	),
	
	

	// application components
	'components'=>array(
		'user'=>array(
			// There you go, use our 'extended' version
            'class'=>'application.components.EWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'session' => array (
			'autoStart' => false,
			'sessionName' => 'datos',
			'cookieMode' => 'allow',
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*//*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => $CONNECTION_STRING,
			'emulatePrepare' => true,
			'username' => DB_USER,
			'password' => DB_PASS,
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>ADMIN_EMAIL,
	),
);
