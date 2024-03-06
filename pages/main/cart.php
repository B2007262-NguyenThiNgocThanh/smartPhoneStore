<h1 style="text-align: center; font-weight: bolder; color: red">GIỎ HÀNG</h1>
<?php
  if(isset($_SESSION['dangky'])){
    echo 'Xin chào '.'<span style="color: blue">'.$_SESSION['dangky'].'</span>';
  }
  
?> 

<table style="width: 95%; text-align: center; margin-left: 40px; margin-bottom: 30px; border-collapse: collapse "border="1">
  <tr class='title_cart'>
    <th>Thứ tự</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>hình ảnh</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>

  <?php
  if(isset($_SESSION['cart'])){
    $i=0;
    $thanhtien=0;
    $tongtien=0;
    foreach($_SESSION['cart'] as $cart_item){
      $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
      $tongtien += $thanhtien;
      $i++;
  ?>
   <tr class="inf_cart">
      <td><?php echo $i;?></td>
      <td><?php echo $cart_item['id'];?></td>
      <td><?php echo $cart_item['tensp'];?></td>
      <td><img src="admincp/modules/quanlysp/upload/<?php echo $cart_item['hinhanh'];?>" width="200px"></td>
      <td>
        <a href="pages/main/add_cart.php?sub_no=<?php echo $cart_item['id']?>">
          <i class="fa fa-minus-square-o" aria-hidden="true"></i>
        </a>
          <?php echo $cart_item['soluong']?>
        <a href="pages/main/add_cart.php?add_no=<?php echo $cart_item['id']?>">
          <i class="fa fa-plus-square-o" aria-hidden="true"></i>
        </a>
      </td>
      <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
      <td><?php echo number_format($thanhtien,0,',','.').'vnđ'?></td>
      <td>
        <a href="pages/main/add_cart.php?xoa=<?php echo $cart_item['id']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xoa" value="Xóa">
        </a>
      </td>
    </tr>

  <?php
      } //end foreach
  ?>
    <tr>
      <!-- <td colspan="8"><input type="submit" class="sub" name="themsanpham" value="Thêm sản phẩm"><p><a href="">Xóa tất cả</a></p></td> -->
      <td colspan="8"> 
        <p>
          <a href="pages/main/add_cart.php?del_all=1">
            <input type="submit" class="sub" name="del_all" value="Xóa tất cả">
          </a>
        </p>
      </td> 
    </tr>
    <tr style="background: #ffbe0094;">
      <td colspan="8">
        <p class="sum_pay">
          Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ';?>
        </p>
        <div class="clear" ></div>
        <?php
          if(isset($_SESSION['dangky'])){
        ?>
        <p style="font-size: 20px; font-weight: bold;"><a href="pages/main/thanhtoan.php" name="thanhtoan"> Đặt hàng </a></p>  <!--từ index vào-->

        <?php
          }else{
        ?>
        <p style="font-size: 20px; font-weight: bold;"><a href="index.php?quanly=dangnhap"> Đăng nhập để đặt hàng </a></p>
        <?php
          }
        ?>
      </td>
    </tr>
  <?php
    }else{
  ?>
    <tr>
      <td colspan = "8"><p>Hiện tại giỏ hàng trống</p></td>
    </tr>
  <?php
    }
  ?>
</table>