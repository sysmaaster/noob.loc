<?php

namespace Admin\Model\User;

use Engine\Core\Database\ActiveRecord;

class User
{
    use ActiveRecord;

    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var User id
     */
    public $id;

    /**
     * @var User name
     */
    public $name;

    /**
     * @var User lastName
     */
    public $lastName;

    /**
     * @var User date
     */
    public $date;

    /**
     * @var User email
     */
    public $email;

    /**
     * @var User password
     */
    public $password;

    /**
     * @var User role
     */
    public $role;

    /**
     * @var User hash
     */
    public $hash;

    /**
     * @var User date_reg
     */
    public $date_reg;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param User $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return User
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param User $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return User
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param User $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param User $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param User $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param User $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param User $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return mixed
     */
    public function getDateReg()
    {
        return $this->date_reg;
    }

    /**
     * @param mixed $date_reg
     */
    public function setDateReg($date_reg)
    {
        $this->date_reg = $date_reg;
    }
}