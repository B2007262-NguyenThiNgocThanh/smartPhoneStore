<div class="main">
	<?php
        if(isset($_GET['quanly'])){
            $temp = $_GET['quanly'];
        }else{
            $temp = '';
        }
        if($temp == 'category'){
            include("main/category.php");
        }elseif($temp == 'cart'){
            include("main/cart.php");
        }elseif($temp == 'lienhe'){
            include("main/lienhe.php");
        }elseif($temp == 'sanpham'){
            include("main/sp_detail.php");
        }elseif($temp == 'dangky'){
            include("main/dangky.php");
        }elseif($temp == 'dangnhap'){
            include("main/dangnhap.php");
        }elseif($temp == 'thanhtoan'){
            include("main/thanhtoan.php");
        }elseif($temp == 'timkiem'){
            include("main/timkiem.php");
        }elseif($temp == 'thanks'){
            include("main/thanks.php");
        }else{
            include("main/index.php");
        }
    ?>
</div>
