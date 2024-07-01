<?php

class Patient{
    //kbao thuoc tinh
    private $id;
    private $fullName;
    private $gender;
     //kbao phương thức
     //hàm tạo
     public function __construct($id, $fullName, $gender){
        $this->id=$id;
        $this->fullName=$fullName;
        $this->gender = $gender;
    }
    public function getId() {
        return $this->id;
        //trả về mảng đtượng
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
}