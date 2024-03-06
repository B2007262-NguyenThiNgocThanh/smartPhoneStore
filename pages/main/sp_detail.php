<?php
    $sql_detail="SELECT * FROM tbl_sp,tbl_loaisp 
        WHERE tbl_sp.id_loai=tbl_loaisp.id_loai 
        AND tbl_sp.id_sanpham='$_GET[id]' LIMIT 1";
    $query_detail=mysqli_query($mysqli, $sql_detail);
?>

<?php
    while($row_detail = mysqli_fetch_array($query_detail)){
?>

<h1 class="name">Điện thoại <?php echo $row_detail['tensanpham'];?> </h1>
<div class="wrapper_detail">
    <div class="img_pro">
        <img width="90%" src="admincp/modules/quanlysp/upload/<?php echo $row_detail['hinhanh'] ?>">
    </div>
    <form method="POST" action="pages/main/add_cart.php?idsanpham=<?php echo $row_detail['id_sanpham']?>">
    <div class="inf_pro">
        <li><?php echo $row_detail['bonhotrong']?> </li>
        <li><?php echo $row_detail['mausac'] ?> </li>
        <h3><u><?php echo number_format($row_detail['giasanpham'],0,',','.').'vnđ' ?> </u></h3><br />
        <h2 style="color: black">Cấu hình điện thoại <?php echo $row_detail['tensanpham']; ?></h2>
        <div class="detail_pro">
            <p class="one">Màn hình: <?php echo $row_detail['manhinh']?></p>
            <p class="two">Hệ điều hành: <?php echo $row_detail['hedieuhanh']?></p>
            <p class="one">Camera sau: <?php echo $row_detail['camerasau']?></p>
            <p class="two">Camera trước: <?php echo $row_detail['cameratruoc']?></p>
            <p class="one">Chip: <?php echo $row_detail['cpu']?></p>
            <p class="two">Ram: <?php echo $row_detail['ram']?></p>
            <p class="one">Dung lượng lưu trữ: <?php echo $row_detail['bonhotrong']?></p>
            <p class="two">Pin, Sạc: <?php echo $row_detail['pin']?></p>
            <p><input class="add_cart" name="add_cart" type="submit" value="Thêm vào giỏ hàng"></p>
        </div>
    </div >
    </form>
</div>
<p class="clear"></p>
<?php
    }
?>