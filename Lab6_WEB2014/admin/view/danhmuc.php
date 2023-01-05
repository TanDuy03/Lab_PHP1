<div class="main">
    <h1>Quản lý danh mục</h1>
    <form action="index.php?act=adddm" method="post">
        <input type="text" name="tendanhmuc" id="">
        <input type="submit" name="themmoi" id="" value="Thêm mới">
    </form>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>
        <?php
            // var_dump($kq);
        ?>
        <?php
            if(isset($kq) && (count($kq) > 0)){
                $i =1;
                foreach ($kq as $dm) {
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$dm['tendanhmuc'].'</td>
                            <td>'.$dm['uutien'].'</td>
                            <td>'.$dm['hienthi'].'</td>
                            <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a></td>
                        </tr>';
                        $i++;
                }
            }
        ?>
    </table>
</div>