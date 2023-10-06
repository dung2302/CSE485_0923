<?php
class HomeController
{
    public function index()
    {
        include "Services/TacGiaService.php";
        $songService = new TacGiaService();
        $songs = $songService->getAllSong();
        include "views/home/index.php";
    }


    public function showSach()
    {
        include "services/SachService.php";
        $categoryService = new TacGiaService();
        $categorys = $SachService->getAllCategory();
        include "views/home/index-category.php";
    }
    public function addSach()
    {
        include "services/SachService.php";
        include "services/SachService.php";
        include "views/home/add.php";
        if (isset($_POST["sbmSave"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["id"];
            $tenSach = $_POST["tenSach"];
            $namXuatBan = $_POST["namXuatBan"];
            $idTacGia = $_POST["idTacGia"];
            $SachService = new SachService();
            $SachService->addSach($id, $tenSach, $namXuatBan, $idTacGia);
            header("location:index.php?c=home&a=index");
        }
        
    }
    public function add(){
        include "services/SachService.php";
        include "views/home/add.php";
        if (isset($_POST["sbmSave"])) {
            // Lấy dữ liệu từ biểu mẫu
            $id = $_POST["id"];
            $tenSach = $_POST["tenSach"];
            $namXuatBan = $_POST["namXuatBan"];
            $idTacGia = $_POST["idTacGia"];
            $SachService = new SachService();
            $SachService->add($id, $tenSach, $namXuatBan, $idTacGia);
            header("location:index.php?c=home&a=index");
        }
    }

   
}