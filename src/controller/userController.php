<?php
namespace Src\controller;

class UserController {
    static function addUser() {
        $user = new UserModel;
        $isEmailExist = $user->verifyEmail($_POST['email']);

        if(!$isEmailExist) {
            $user->insertUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['isAdmin']);
        }
    }
}
?>