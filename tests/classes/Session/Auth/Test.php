<?php defined('SYSPATH') OR die('No direct script access.');

class Session_Auth_Test extends Session {

	/**
	 * @return  string
	 */
	public function id()
	{
		return 'session';
	}

	/**
	 * @param   string  $id  session id
	 * @return  null
	 */
	protected function _read($id = null)
	{
		$_SESSION = array();
		$this->_data =& $_SESSION;

		return null;
	}

	/**
	 * @return  string
	 */
	protected function _regenerate()
	{
		return 'session';
	}

	/**
	 * @return  bool
	 */
	protected function _write()
	{
		$this->_data =& $_SESSION;

		return true;
	}

	/**
	 * @return  bool
	 */
	protected function _restart()
	{
		$_SESSION = array();
		// Use the $_SESSION global for storing data
		$this->_data =& $_SESSION;

		return true;
	}

	/**
	 * @return  bool
	 */
	protected function _destroy()
	{
		$_SESSION = array();

		return true;
	}

} // End Session_Native
