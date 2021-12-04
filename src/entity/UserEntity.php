<?php
namespace Entity;

use model\UserModel;

class UserEntity {
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $isAdmin;


    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
       $this->lastName = $lastName;

        return $this;
    } 

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword() {
        $this->passowrd = $password;

        return $this;
    }

    public function getIsAdmin() {
        return $this->isAdmin;
    }

    public function setIsAdmin() {
        $this->isAdmin = $isAdmin;

        return $this;
    }
}    