<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    // connectdb();
    include "view/header.php";

    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'danhmuc':
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
                //lấy danh sách
            case 'adddm':
                //kiểm tra
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendanhmuc = $_POST['tendanhmuc'];
                    themdm($tendanhmuc);
                }
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
                //lấy danh sách
            case 'deldm':
                // include "view/sanpham.php";
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldm($id);
                }                
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;  
            case 'updatedmform':
                //lấy đúng id truyền vào
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonedm($id);
                    //danh sức danh mục
                    $kq = getall_dm();
                    include "view/updatedmform.php";
                }   
                if(isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $tendanhmuc = $_POST['tendanhmuc'];
                    updatedm($id,$tendanhmuc);
                    //danh sức danh mục
                    $kq = getall_dm();
                    include "view/danhmuc.php";
                } 
                break;  
            case 'sanpham':
                //load danh sách sản phảm
                $dsdm = getall_dm();
                //load danh sách sản phẩm
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'sanpham_add':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
            
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img =  $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    }
                    if($uploadOk == 1){
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);    
                        insert_sanpham($iddm,$tensp,$gia,$img);
                    }
                    // move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file); 
                    // insert_sanpham($iddm,$tensp,$gia,$img);
                }
                //load danh sách sản phảm
                $dsdm = getall_dm();
                //load danh sách sản phẩm
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'taikhoan':
                include "view/taikhoan.php";
                break;
            case 'donhang':
                include "view/donhang.php";
                break;
                        
            default:
                include "view/home.php";
                break;
        }
    }
    else {
        include "view/home.php";
    }
    


    include "view/footer.php"

?>