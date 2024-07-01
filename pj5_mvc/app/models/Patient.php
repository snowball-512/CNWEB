<?php
class Patient{
    //properties;
    private $id;
    private $fullName;
    private $gender;
    //..

    //methods
    public function __construct($id, $fullName, $gender){
        $this->id=$id;
        $this->fullName=$fullName;
        $this->gender = $gender;
    }
    public function getId() {
        return $this->id;
        
    }
    public function getFullName(){
        return $this->fullName;
    }
    public function getGender() {
        return $this->gender;
    }
    public function setFullName($fullName){
        $this->fullName=$fullName;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setGender($gender){
        $this->gender=$gender;
    }
}

?>