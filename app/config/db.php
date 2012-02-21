<?php
/**
 * Database connection settings
 */
return array(
	'connectionString' => 'mysql:host=localhost;dbname=yii_wiki',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',

	// comment on production
	'enableParamLogging' => YII_DEBUG,
	'enableProfiling' => YII_DEBUG,
);