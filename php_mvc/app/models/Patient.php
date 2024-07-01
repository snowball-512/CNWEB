<?php

// định nghĩa lớp Patient
class Patient
{
    private $id;
    private $fullName;
    private $gender;

    /// các phương thức
    // phương thức khởi tạo tường minh
    public function __construct($id, $fullName, $gender)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->gender = $gender;
    }

    // phương thức getter và setter
    public function getId()
    { return $this->id; }

    public function getFullName()
    { return $this->fullName; }

    public function getGender()
    { return $this->gender; }

    public function setFullName($fullName)
    { $this->fullName = $fullName; }

    public function setGender($gender)
    { $this->gender = $gender; }

}