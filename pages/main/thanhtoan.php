<?php
    session_start();
    include('../../admincp/config/config.php'); //từ thanhtoan.php

    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) 
        VALUE('".$id_khachhang."','".$code_order."',1)";
    $cart_query = mysqli_query($mysqli, $insert_cart);

    if($insert_cart){
        //thêm chi tiết giỏ hàng
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluongmua = $value['soluong'];
            $insert_oder_detail =  "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) 
                VALUE ('".$id_sanpham."','".$code_order."','".$soluongmua."')";
            mysqli_query($mysqli, $insert_oder_detail);
            //xử lý số lượng còn lại
            $sql = "SELECT soluong FROM tbl_sp WHERE id_sanpham = '".$id_sanpham."'";
            $query = mysqli_query($mysqli, $sql);
            $row = mysqli_fetch_array($query);
            $temp = $row['soluong'] - $soluongmua;
            $sql_update = "UPDATE tbl_sp SET soluong = '".$temp."' WHERE id_sanpham = '".$id_sanpham."'";
            $query_update = mysqli_query($mysqli, $sql_update);
        }
    }
    unset($_SESSION['cart']);
    header('Location: ../../index.php?quanly=thanks'); //từ thanh toán
?>
