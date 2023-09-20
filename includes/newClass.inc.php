<?php
class Person {
    private $personcode;
    public  $name;
    public $gender;

    public function setName($inputName) {
       // return "do nothing";
        $this->name = $inputName;
    }

    public function getName() {
        return $this->name;
    }

}

class Employie {
    public $name;
    public $role;
    public $access;

    public function setName($inputName) {
        $this->name = $inputName;
    }
    public function getName() {
        return $this->name;
    }

    public function setRole($inputRole) {
        $this->role = $inputRole;
    }
    public function getRole($inputRole) {
        return $this->$role;
    }
    public function setAccess($inputAccess) {
        $this->role = $inputAccess;
    }
    public function getAccess($inputAccess) {
        return $this->$access;
    }
    
}



class Manager extends Employie{
    public $mngRole;

    public function setMngRole($inputMngRole) {
        $this->mngRole = $inputMngRole;
    }
    public function getMngRole($inputMngRole) {
        return $this->$mngRole;
    }
}
?>