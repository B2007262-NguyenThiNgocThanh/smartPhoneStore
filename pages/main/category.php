<?php
	$sql_sp = "SELECT * FROM tbl_loaisp, tbl_sp WHERE 
		tbl_sp.id_loai=tbl_loaisp.id_loai AND tbl_sp.id_loai='$_GET[id]' 
		ORDER BY tbl_sp.id_sanpham DESC";
	$query_sp = mysqli_query($mysqli,$sql_sp);

	$query_pro=mysqli_query($mysqli,$sql_sp);
	$row_title = mysqli_fetch_array($query_pro);
	
?>
<!-- <div class="main"> -->
    <h3 class="name">DANH MỤC LOẠI SẢN PHẨM : <?php echo $row_title['tenloai'] ?></h3>
		<ul class="product-list">
			<?php
				while($row_sp = mysqli_fetch_array($query_sp)){
			?> 
			<li>
				<a href="index.php?quanly=sanpham&id=<?php echo $row_sp['id_sanpham']?>">
					<img src="admincp/modules/quanlysp/upload/<?php echo $row_sp['hinhanh']?>">
					<p class="title-product"><?php echo $row_sp['tensanpham']?></p>
					<p class="price"><?php echo number_format($row_sp['giasanpham'],0,',','.').'vnđ' ?></p>
					<div class="hiden">
						<i class="fa fa-microchip" aria-hidden="true"></i> <?php echo $row_sp['cpu']?><br/>
						<i class="fa fa-tablet" aria-hidden="true"></i> <?php echo $row_sp['manhinh']?><br/>
						<i class="fa fa-microchip" aria-hidden="true"></i> <?php echo $row_sp['ram']?>
						<i class="fa fa-hdd-o" aria-hidden="true"></i> <?php echo $row_sp['bonhotrong']?>
					</div>
				</a>
			</li> 
			<?php
				}
			?>
		</ul> 
<!-- </div> -->
<p class='clear'></p>
