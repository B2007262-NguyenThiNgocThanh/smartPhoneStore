<?php
    session_start();
    include("../../admincp/config/config.php");
    //thêm số lượng
    if(isset($_GET['add_no'])){
        $id=$_GET['add_no'];
        
        $sql = "SELECT * FROM tbl_sp WHERE id_sanpham='".$id."' LIMIT 1" ;
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);

        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                $_SESSION['cart'] = $pro;
            }else{
                $tang_sl = $cart_item['soluong'] + 1;

                if($cart_item['soluong']< $row['soluong']){ //<= maximum
                    $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$tang_sl
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }else{
                    $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $pro;
            }
            header('Location: ../../index.php?quanly=cart');
        }
    }
    //trừ số lượng
    if(isset($_GET['sub_no'])){
        $id = $_GET['sub_no'];

        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                $_SESSION['cart'] = $pro;
            }else{
                $giam_sl = $cart_item['soluong'] - 1;
                //sl >= 1
                if($cart_item['soluong']>1){ 
                    $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$giam_sl
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }else{
                    $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $pro;
            }
            header('Location: ../../index.php?quanly=cart');
        }

    }
    //xoá từng sp
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']
                    ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
            }
            $_SESSION['cart'] = $pro;
            header('Location: ../../index.php?quanly=cart');
        }
    }
    //xoá tất cả
    if(isset($_GET['del_all']) && $_GET['del_all']==1){
        unset($_SESSION['cart']); //chỉ định 1 session cần xóa
        header('Location: ../../index.php?quanly=cart');
    }
    //thêm sp vào giỏ hàng
    if(isset($_POST['add_cart'])){
        //session_destroy();
        $id=$_GET['idsanpham'];
        $soluong=1;
        $sql = "SELECT * FROM tbl_sp WHERE id_sanpham='".$id."' LIMIT 1" ;
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);

        if($row){
            $new_pro[]= array('tensp'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong //soluong là số lượng trong các sp có hàng
                ,'giasp'=>$row['giasanpham'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masanpham']);
            //kt session cart tồn tại => tạo mảng pro
            if(isset($_SESSION['cart'])){
                $found=false; //dl k trùng
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id']==$id){ //sp có trong cart => tăng sl lên 1, đồng thời tạn mảng nữa nên phải lk dl
                        $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$soluong+1
                            ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                        $found=true; //dữ liệu trùng
                    }else{//dl k trùng => sp mới
                        $pro[]= array('tensp'=>$cart_item['tensp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong']
                        ,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                    }
                }
                if($found==false){ //trường hợp chưa tồn tại session (dl k trùng)
                    $_SESSION['cart'] = array_merge($pro, $new_pro); //lk dl pro &  new_pro
                }else{
                    $_SESSION['cart'] =$pro;
                }
            }else{
                $_SESSION['cart'] = $new_pro;
            }
        }
        header("Location: ../../index.php?quanly=cart");
      //  print_r($_SESSION['cart']);
    }
?>