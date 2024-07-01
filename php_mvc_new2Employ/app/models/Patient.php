<?php

// định nghĩa lớp Patient
class Patient
{
    private $id;
    private $tennhanvien;
    private $gioitinh;
    private $mota;

    /// các phương thức
    // phương thức khởi tạo tường minh
    public function __construct($id, $tennhanvien, $gioitinh, $mota)
    {
        $this->id = $id;
        $this->tennhanvien = $tennhanvien;
        $this->gioitinh = $gioitinh;
        $this->mota = $mota;
    }

    // phương thức getter và setter
    public function getId()
    { return $this->id; }

    public function getten()
    { return $this->tennhanvien; }

    public function getgioitinh()
    { return $this->gioitinh; }
    public function getmota()
    { return $this->mota; }

    public function setten($tennhanvien)
    { $this->tennhanvien = $tennhanvien; }

    public function setGender($gioitinh)
    { $this->gioitinh = $gioitinh; }
    public function setmota($mota)
    { $this->mota = $mota; }
}