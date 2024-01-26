<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql="insert into  sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="DELETE FROM sanpham WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham($kyw="",$iddm=0){
        $sql="select * from sanpham where 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm  ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham1(){
        $sql="select * from sanpham"; 
        return pdo_query($sql);
    }


    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    // function  update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    //     if($hinh!=""){
    //         $sql="update sanpham set iddm= '".$iddm."', name= '".$tensp."',price= '".$giasp."' , mota= '".$mota."' ,hinh= '".$hinh."' where id=".$id;
    //     }else{
    //         $sql="update sanpham set iddm= '".$iddm."', name= '".$tensp."',price= '".$giasp."' , mota= '".$mota."'  where id=".$id;
    //     }
    //     pdo_execute($sql);
    // }

    function update_san_pham($tensp, $giasp, $hinh, $mota, $view, $iddm, $id){
       
        $sql="UPDATE sanpham SET name=?, price=?, img=?, mota=?, view=?, iddm=? WHERE id=?";
       
        pdo_execute($sql, $tensp, $giasp, $hinh, $mota, $view, $iddm, $id);
    }
?>