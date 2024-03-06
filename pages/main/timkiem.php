<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['search'];
    }else{
        $tukhoa = '';
    }
	$sql_sp = "SELECT * FROM tbl_sp, tbl_loaisp WHERE tbl_sp.id_loai=tbl_loaisp.id_loai AND tbl_sp.tensanpham LIKE '%".$tukhoa."%'";
	$query_sp = mysqli_query($mysqli,$sql_sp);

	// $query_pro=mysqli_query($mysqli,$sql_sp);
	// $row_title = mysqli_fetch_array($query_pro);
	
?>  
 
 
 <h3 class="name"> Từ khóa tìm kiếm: <?php echo $_POST['search']?> </h3>
	<ul class="product-list">
	<?php
	while($row = mysqli_fetch_array($query_sp)){
	?> 
	<li>
		<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
			<img src="admincp/modules/quanlysp/upload/<?php echo $row['hinhanh'] ?>">	
			<p class="title-product"><?php echo $row['tensanpham'] ?></p>
			<p class="price"> <?php echo number_format($row['giasanpham'],0,',','.').'vnđ' ?></p>
			<div class="hiden">
						<i class="fa fa-microchip" aria-hidden="true"></i> <?php echo $row['cpu']?><br/>
						<i class="fa fa-tablet" aria-hidden="true"></i> <?php echo $row['manhinh']?><br/>
						<i class="fa fa-microchip" aria-hidden="true"></i> <?php echo $row['ram']?>
						<i class="fa fa-hdd-o" aria-hidden="true"></i> <?php echo $row['bonhotrong']?>
					</div>
		</a>
	</li>
	<?php
	}
	?>				
</ul> 
<p class="clear"></p>
