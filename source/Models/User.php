<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use PDOException;

class User extends DataLayer{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name", "email", "passwd"]);
    }

    public function save(): bool
    {
        try{
            if($this->id){
                $user = $this->find("email = :e AND id != :i", "e={$this->email}&i={$this->id}")->count();
            }else{
                $user = $this->find("email = :e", "e={$this->email}")->count();
            }

            if ($user){
                throw new PDOException("O email que você tentou cadastrar já existe!");
            }

            return parent::save();
        } catch(PDOException $exception){
            $this->fail = $exception;
            return false;
        }
    }
}