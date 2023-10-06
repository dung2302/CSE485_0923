<?php 
class Sach{
    public $id;
    public $tenSach;
    public $namXuatBan;
    public $idTacGia;

    public function __construct($id, $tenSach, $namXuatBan, $idTacGia) {
        $this->id = $id;
        $this->tenSach = $tenSach;
        $this->namXuatBan = $namXuatBan;
        $this->idTacGia = $idTacGia;
    }

    public function getid(){
        return $this->id;
    }
    public function gettenSach(){
        return $this->tenTacGia;
    }
    public function getnamXuatBan(){
        return $this->namXuatBan;
    }
    public function getidTacGia(){
        return $this->idTacGia;
    }
    public function setid($id){
        $this->id = $id;
    }
    public function settenSach($tenSach){
        $this->tenSach = $tenSach;
    }
    public function set($tenSach){
        $this->tenSach = $tenSach;
    }
    public function setnamXuatBan($namXuatBan){
        $this->namXuatBan = $namXuatBan;
    
    }
    public function setidTacGia($idTacGia){
        $this->$idTacGia = $idTacGia;
    }
}