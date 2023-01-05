<?php
    function themdm($tendanhmuc){
        $conn = connectdb();
        $sql = "INSERT INTO danhmuc (tendanhmuc)
        VALUES ('$tendanhmuc')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function updatedm($id,$tendanhmuc){
        $conn = connectdb();
        $sql = "UPDATE danhmuc SET tendanhmuc='".$tendanhmuc."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);     
        // execute the query
        $stmt->execute();
    }
    function getonedm($id){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM danhmuc WHERE id =".$id);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        return $kq;
    }
    function deldm($id){
        $conn = connectdb();
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        $conn->exec($sql);
        // use exec() because no results are returned
        //thực thi câu lệnh
        // $stmt = $conn->prepare("SELECT * FROM danhmuc");
        // $stmt->execute();
    }
    function getall_dm(){
        $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        return $kq;
    }

?>