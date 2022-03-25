<?php

namespace Bidkar\Brawlhalla\Libs;

class User
{
    public $id;
    public $uuid;
    protected $name;
    protected $password;
    protected $email;
    public $created_at;
    public $status; // 1=Active 0=Inactive

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public static function validateName($name)
    {
        # entre 8 y 16 caracteres
        # solo letras minusculas y números
        return (bool) preg_match("/^[a-z0-9]{8,16}$/", $name);
    }

    public static function validatePassword($password)
    {
        $regex = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([A-Za-z0-9]){6,12}$/';
        return (bool) preg_match($regex, $password);
    }

    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
