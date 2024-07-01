<?php

// định nghĩa lớp Patient
class Patient
{
    private $matailieu;
    private $tentailieu;
    private $tacgia;
    private $mota;
    /// các phương thức
    // phương thức khởi tạo tường minh
    public function __construct($matailieu, $tentailieu, $tacgia,$mota)
    {
        $this->matailieu = $matailieu;
        $this->tentailieu = $tentailieu;
        $this->tacgia = $tacgia;
        $this->mota = $mota;
    }

    // phương thức getter và setter
    public function getId()
    { return $this->matailieu; }

    public function getten()
    { return $this->tentailieu; }

    public function gettacgia()
    { return $this->tacgia; }
    public function getmota()
    { return $this->mota; }
    public function setname($tentailieu)
    { $this->tentailieu = $tentailieu; }

    public function setloaihang($tacgia)
    { $this->tacgia = $tacgia; }
    public function setmota($mota)
    { $this->mota = $mota; }

}