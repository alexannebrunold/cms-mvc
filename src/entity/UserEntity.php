<?php
class UserEntity
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $isAdmin;
    private $title;
    private $content;


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }



    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        if(strlen($password) > 0) {
        return $this->password = password_hash($password, PASSWORD_DEFAULT);
        } else return  $this->password = NULL;
    }

    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    public function getUser() {
        $user['firstName'] = $this->firstName;
        $user['lastName'] = $this->lastName;
        $user['email'] = $this->email;
        $user['isAdmin'] = $this->isAdmin;
        $user['password'] = $this->password;

        return $user;
    }
}

?>
