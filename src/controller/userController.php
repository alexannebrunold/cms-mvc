<?php

require_once('./entity/UserEntity.php');

class UserController
{
    static function createUser()
    {
        $user = new UserModel();
        // $isEmailExist = $user->verifyEmail($_POST['email']);

        $userData = array (
        'id' => '0o19505c-55e0-11ec-8b10-0242ac140002',
        'type' => $_POST['flexCheckChecked'],
        'article_id' => '0o19505c-55e0-11em-8b10-0242ac140002',
        'first_name' => $_POST['firstName'],
        'last_name' => $_POST['lastName'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
    );

    var_dump($userData);

// if($isEmailExist) {
//     print 'email already exist in db';
// }else {

    return $user->insertUser($userData);
// }
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