<?php
    function insert_sanpham($iddm,$tensp,$gia,$img){
        $conn = connectdb();
        $sql = "INSERT INTO sanpham (iddm, tensp, gia, img)
        VALUES ('$iddm', '$tensp', '$gia', '$img')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getall_sanpham(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM sanpham");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        return $kq;
    }
    function delsp($id){
        $conn = connectdb();
        $sql = "DELETE FROM sanpham WHERE id=".$id;

        // use exec() because no results are returned
        $conn->exec($sql);
        //thực thi câu lệnh
        // $stmt = $conn->prepare("SELECT * FROM danhmuc");
        // $stmt->execute();
    }
    // function getonedm($id){
    //     $conn = connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM sanpham WHERE id =".$id);
    //     $stmt->execute();
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $kq = $stmt ->fetchAll();
    //     return $kq;
    // }
?>