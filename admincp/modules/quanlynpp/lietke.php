<?php
    $sql_lietke_npp = "SELECT * FROM tbl_npp ORDER BY id_nhaphanphoi DESC"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_npp = mysqli_query($mysqli,$sql_lietke_npp);
?>
<p> LIỆT KÊ </p>
<table style="width:100%" border="1" style="border-collapse: collapse;" style="text-align: center;">
  <tr>
    <th> Id nhà phân phối</th>
    <th> Tên nhà phân phối </th>
    <th> Mã nhà phân phối</th>
    <th> Địa chỉ nhà phân phối</th>
    <th> Quản lý </th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_npp)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr>
    <td> <?php echo $i?></td>
    <td><?php echo $row['tennhapp']?></td>
    <td><?php echo $row['manhapp']?></td>
    <td><?php echo $row['diachi']?></td>
    <td style="text-align: center">
        <a href="modules/quanlynpp/xuly.php?idnpp=<?php echo $row['id_nhaphanphoi']?>">Xóa</a>  | 
        <a href="?action=quanlynpp&query=edit&idnpp=<?php echo $row['id_nhaphanphoi']?>"> Sửa </a>
    </td>
  </tr>
  <?php
   }
  ?>

  </table>