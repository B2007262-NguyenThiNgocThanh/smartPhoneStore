<?php
	$sql_loai = "SELECT * FROM tbl_loaisp ORDER BY id_loai DESC";
	$query_loai = mysqli_query($mysqli,$sql_loai);
?>
<?php
	if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
		unset($_SESSION['dangky']);
		// unset($_SESSION['dangnhap']);
	}
?>

<div class="menu">
	<div class="menu-wrapper">
	<div class="logo">
		<img src="images/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
	</div> 
	<ul class="list_menu">
		<li>
			<a href="index.php">
				<i class="fa fa-home" aria-hidden="true"></i> Trang chủ 
			</a>
		</li>
		<div class="search">
        <form class="input-search" method="POST" action="index.php?quanly=timkiem">
            <div class="autocomplete">
                <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Bạn tìm gì...">
				<button type="submit" name="timkiem">
                    <i class="fa fa-search"></i>
                    Tìm kiếm
                </button>
            </div>
        </form> 
		</div>
		<!-- <li><a href="index.php?quanly=thongtindonhang"><i class="fa fa-file-word-o" aria-hidden="true"></i>Thông tin đơn hàng</a></li> -->
		<!-- nếu không tồn tại đăng ký thì vào giao diện đăng nhập trước-->
		<?php
		if(!isset($_SESSION['dangky'])){
		?>
			<li style="float: right">
				<a href="index.php?quanly=dangnhap"> 
				<i class="fa fa-id-badge" aria-hidden="true"></i> Đăng nhập
				</a>
			</li> 
		<?php
		}else{
		?>
			<li style="float: right">
				<a href="index.php?dangxuat=1"> 
				<i class="fa fa-user-o" aria-hidden="true" style=" color: red"></i>
				<?php
				if(isset($_SESSION['dangky'])){ 
						echo $_SESSION['dangky'];
				}
				?>
				<i class="fa fa-sign-out" aria-hidden="true" style=" color: red"></i> Đăng xuất 
				</a>
			</li>
		<?php
		}
		?> 

		<li style="float: right"><a href="index.php?quanly=cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng </a></li>
		<li style="float: right"><a href="index.php?quanly=lienhe">
			<i class="fa fa-phone" aria-hidden="true"></i>Liên hệ 
			</a>
		</li>
	</ul>
	</div>
</div>
<div class="menu-tukhoa">
<ul  class="list_tukhoa">
	<li style="color: #ffffff">Từ khóa: </li>
	<?php
		while($row_loai = mysqli_fetch_array($query_loai)){
	?>
		<li><a href="index.php?quanly=category&id=<?php echo $row_loai['id_loai']?>"><?php echo $row_loai['tenloai']?></a></li>
	<?php
		}
	?>
</ul>
</div>