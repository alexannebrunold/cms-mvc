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

    static function createArticle () {

    $user = new UserModel();

    $userData = array (
        'id' => '0o19505c-55e0-11ec-8b10-0242ac140002',
        'image' => $_POST['image'],
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'published_date' => '2021-12-05 15:29:30',
        'user_id' => '45678905'
    );
        return $user->createArticle($userData);
    }
}

?>