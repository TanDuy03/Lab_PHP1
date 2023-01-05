<div class="main">
    <h1>Cập nhập danh mục</h1>
    <?php
        // echo var_dump($kqone);
    ?>
    <form action="index.php?act=updatedmform&upd" method="post">
        <input type="text" name="tendanhmuc" id="" value="<?=$kqone[0]['tendanhmuc']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
        <input type="submit" name="capnhap" id="" value="Cập nhập">
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