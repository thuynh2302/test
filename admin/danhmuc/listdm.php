<div class="row">
            <div class="row formtitle"><h1>Danh sách mới loại hàng</h1></div>
        
        <div class="row formcontent">
            <div class="row mb10 formdslh">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>
                    <?php
                       foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$tendanhmuc.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                        </tr>
                            ';
                       }
                    ?>
                    
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
</div>