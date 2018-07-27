<?php

namespace Engine\Core\Auth;

use Engine\Helper\Session;

class Auth implements AuthInterface
{
    /**
     * @var bool
     */
    protected $authorized = false;
    protected $hash_user;
    protected $user;

    /**
     * @return bool
     */
    public function authorized()
    {
        return $this->authorized;
    }

    public function setAuthorized()
    {
        $this->authorized = true;
    }

    /**
     * @return mixed
     */
    public static function hashUser()
    {
        return Session::get('user_hash');
    }
	
	/**
	 * @param $user
	 * @param $hash
	 */
    public function authorize($users, $hash)
    {
	    Session::set('auth_authorized', true);
	    Session::set('user_hash', $hash);
	    Session::set('auth_user', $users);
    }

    /**
     * User unAuthorization
     * @return void
     */
    public function unAuthorize()
    {
	    unset($_SESSION['auth_authorized']);
	    unset($_SESSION['user_hash']);
	    unset($_SESSION['auth_user']);
    }

    /**
     * Generates a new random password salt
     * @return int
     */
    public static function salt()
    {
        return (string) rand(10000000, 99999999);
    }

    /**
     * Generates a hash
     * @param string $password
     * @param string $salt
     * @return string
     */
    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }
}