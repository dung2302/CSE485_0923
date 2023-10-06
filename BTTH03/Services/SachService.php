<?php 
include "models/Sach.php";

class SachService{
    private $listOfSach;
    public function getAllSach(){
        
        $sql = "SELECT * FROM sach";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $key => $value) {
            $sach = new sach($value['id'], $value['tenSach'],$value['namXuatBan'],$value['idTacGia']);
            $this->listOfSach[] = $sach;
        }
        return $this->listOfSach;
    }
    public function getSach($id){
        $sql = "SELECT * FROM sach WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $sach = new Sach($result['id'], $result['tenSach'],$result['tenSach'],$result['namXuatBan'],$result['idTacGia']);
        return $category;
    }
    public function edit($id, $tenSach, $namXuatBan, $idTacGia){
        $sql = "UPDATE sach SET tenSach = :tenSach , namXuatBan =:namXuatBan, idTacGia =:idTacGia WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenSach', $tenSach);
        $stmt->bindParam(':namXuatBan', $namXuatBan);
        $stmt->bindParam(':idTacGia', $idTacGia);
        $stmt->execute();
    }
    public function delete($id){
        $sql = "DELETE FROM sach WHERE id = :id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function addCategory($id, $tenSach, $namXuatBan, $idTacGia){
        $sql = "INSERT INTO category (id, tenSach, namXuatBan, idTacGia) VALUES (:id, :tenSach,:namXuatBan,:idTacGia)";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenSach', $tenSach);
        $stmt->bindParam(':namXuatBan', $namXuatBan);
        $stmt->bindParam(':idTacGia', $idTacGia);
        $stmt->execute();

    }
}