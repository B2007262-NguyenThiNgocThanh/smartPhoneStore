<?php
	$sql_loai = "SELECT * FROM tbl_loaisp ORDER BY id_loai DESC";
	$query_loai = mysqli_query($mysqli,$sql_loai);
?>

<!-- <ul  class="list_tukhoa">
	<?php
		while($row_loai = mysqli_fetch_array($query_loai)){
	?>
		<li><a href="index.php?quanly=category&id=<?php echo $row_loai['id_loai']?>"><?php echo $row_loai['tenloai']?></a></li>
	<?php
		}
	?>
</ul> -->
<p class="clear"></p>	
<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = '';
	}

	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*10)-10;
	}
	$sql_sp = "SELECT * FROM tbl_loaisp, tbl_sp WHERE 
		tbl_sp.id_loai=tbl_loaisp.id_loai ORDER BY tbl_sp.id_sanpham ASC LIMIT $begin,10";
	$query_sp = mysqli_query($mysqli,$sql_sp);

	// $query_pro=mysqli_query($mysqli,$sql_sp);
	// $row_title = mysqli_fetch_array($query_pro);
	
?>  

<h3 class="name"> SẢN PHẨM MỚI </h3>
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
<!-- phân trang -->
<div class="clear">
	<?php
	$sql_page = "SELECT * FROM tbl_sp";
	$query = mysqli_query($mysqli,$sql_page);
	$cnt_row = mysqli_num_rows($query);
	$trang = ceil($cnt_row/10); //ceil là hàm làm tròn
	// echo $page;
	?>
	<ul class="list_pages">
		<li>&laquo;</li>
		<?php
			for($i=1; $i<=$trang;$i++){
		?>
		<li>
			<a <?php if($i==$page){echo 'style="background: #5074fb"';}else{echo'';}?> 
				href="index.php?trang=<?php echo $i ?>">
				<?php echo $i ?>
			</a>
		</li>
		<?php
			}
		?>
		<li>&raquo;</li>
	</ul>
	<p class="clear"></p>
</div>
