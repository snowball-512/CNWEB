<?php

// định nghĩa lớp Patient
class Patient
{
    private $masach;
    private $name;
    private $tacgia;
    private $theloai;
    private $mota;
    private $soluong;
    /// các phương thức
    // phương thức khởi tạo tường minh
    public function __construct($masach, $name, $tacgia, $theloai,$mota,$soluong)
    {
        $this->masach = $masach;
        $this->name = $name;
        $this->tacgia = $tacgia;
        $this->theloai = $theloai;
        $this->mota = $mota;
        $this->soluong = $soluong;
    }

    // phương thức getter và setter
    public function getId()
    { return $this->masach; }

    public function getName()
    { return $this->name; }

    public function getTacgia()
    { return $this->tacgia; }
    public function getTheloai()
    { return $this->theloai; }
    public function getMota()
    { return $this->mota; }
    public function getsl()
    { return $this->soluong; }

    public function setFullName($name)
    { $this->name = $name; }

    public function setTacgia($tacgia)
    { $this->tacgia = $tacgia; }
    public function setTheloai($theloai)
    { $this->theloai = $theloai; }
    public function setMota($mota)
    { $this->mota = $mota; }
    public function setSoluong($soluong)
    { $this->soluong = $soluong; }
}