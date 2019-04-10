<?php defined('SYSPATH') OR die('No direct access allowed.');

class Auth_Jam_Test extends Kohana_Auth_Jam {

	protected function _load_user($user)
	{
		if ( ! $user)
			return null;

		return is_object($user) ? $user : Jam::find('test_user', $user);
	}

	protected function _load_token($token)
	{
		if ( ! $token)
			return null;

		return is_object($token) ? $token : Jam::all('test_user_token')->valid_token($token)->first();
	}

	protected function _autologin_cookie($token = null, $expires = null)
	{
		if ($token === false)
		{
			unset($_COOKIE['authautologin']);
		}
		elseif ($token !== null)
		{
			$_COOKIE['authautologin'] = $token;
		}
		else
		{
			return Arr::get($_COOKIE, 'authautologin');
		}

		return $this;
	}

	public function set_service($name, $service)
	{
		$this->_services[$name] = $service;
	}

}
