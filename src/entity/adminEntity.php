<?php
namespace Entity;

// use model\AdminModel;

class AdminEntity extends UserEntity {
    private $id;

     public function getUserById() {
        return $this->id;
    }
  }
?>