<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'services' => array(
		'facebook' => array(
			'enabled' => false,
			'auto_login' => false,
			'create_user' => true,
			// 'back_url' => '/',
			'auth' => array(
				'app_id' => '',
				'app_secret' => ''
			)
		),
		'twitter' => array(
			'enabled' => false,
			// 'back_url' => '/',
			'auth' => array(
				'consumer_key' => 'YOUR_CONSUMER_KEY',
				'consumer_secret' => 'YOUR_CONSUMER_SECRET',
			),
			'create_user' => true,
		),
	),
);
