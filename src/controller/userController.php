<?php

require_once('./entity/UserEntity.php');

class UserController
{
    static function createUser()
    {
        $user = new UserModel();
        // $isEmailExist = $user->verifyEmail($_POST['email']);

        $userData = new UserEntity();
        $userData->setEmail($_POST['email']);
        $userData->setFirstName($_POST['firstName']);
        $userData->setLastName($_POST['lastName']);
        $userData->setPassword($_POST['password']);
        $userData->setIsAdmin($_POST['isAdmin']);

        // TODO: delete me
        var_dump($userData);


        return $user->insertUser($userData);
    }
}

?>