<?php

namespace Bidkar\Brawlhalla\Libs;

use Bidkar\Brawlhalla\Libs\MysqlConnection;

class User
{
    public $id;
    public $uuid;
    protected $name;
    protected $password;
    protected $email;
    public $created_at;
    public $status; // 1=Active 0=Inactive

    # CRUD: Create, Read, Update, Delete
    # SQL -> DDL y DML (Data Definition Lang y Data Manipulation Lang)
    public static function createNewUser(string $name, string $password, string $email)
    {
        if (
            ! User::validateName($name) or
            ! User::validatePassword($password) or
            ! User::validateEmail($email)
        ) {
            return false;
        }

        $user = new User();
        $user->uuid = \Ramsey\Uuid\v4();
        $user->setName($name);
        $user->setPassword($password);
        $user->setEmail($email);

        # conectar a la base de datos y registrar al nuevo usuario
        # abrir conexion a bdd
        $cnn = new MysqlConnection();
        # definir consulta sql para registrar nuevo usuario
        $query = sprintf("INSERT INTO users (uuid,name,password,email) " .
                 "VALUES ('%s','%s','%s','%s')",$user->uuid,$name,$password,$email);
        $rst = $cnn->cnn->query($query);
        if (! $rst) {
            return false;
        }

        $user->id = $cnn->cnn->insert_id;
        return $user;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function setEmail($value)
    {
        $this->email = $value;
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
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        else
            return false;
    }
}
