<div class="main">
    <h1>Sản phẩm</h1>
    <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="" style="background-color: #ccc;">Chọn danh mục</option>
            <?php
                if (isset($dsdm)) {
                    foreach ($dsdm as $dm) {
                        # code...
                        echo '<option value="'.$dm['id'].'">'.$dm['tendanhmuc'].'</option> ';
                        
                        // <option value="'.$dm['id'].'">'.$dm['tendanhmuc'].'</option>
                    }
                }
            ?>
        </select>
        <input type="text" name="tensp" id="">
        <input type="file" name="hinh" id="">
        <?php
            if(isset($uploadOk)&&($uploadOk == 0)){
                echo"Chọn lại file hình";
            }
        ?>
        <input type="text" name="gia" id="">
        <input type="submit" name="themmoi" id="" value="Thêm mới">
    </form>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        <?php
            // var_dump($kq);
        ?>
        <?php
            if(isset($kq) && (count($kq) > 0)){
                $i =1;
                foreach ($kq as $item) {
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$item['tensp'].'</td>
                            <td><img src = "'.$item['img'].'" width="80px" height="80px"></td>
                            <td>'.$item['gia'].'</td>
                            <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a></td>
                        </tr>';
                        $i++;
                }
            }
        ?>
    </table>
</div>