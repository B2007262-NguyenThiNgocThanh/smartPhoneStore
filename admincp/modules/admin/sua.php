<?php
    $sql_edit="SELECT * FROM tbl_admin WHERE id_admin = '$_GET['idadmin']' LIMIT 1";
    $query_edit=mysqli_query($mysqli,$sql_edit);
?>

<p>CẬP NHẬT TÀI KHOẢN QUẢN TRỊ </p>

<table>
    <form>
        <tr>
            <td>Tên đăng nhập</td>
            <td><input type='text' value='<?php echo $row['username']?>' name='adminname' style="width:90%"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type='text' value='<?php echo $row['password']?>' name='psw' style="width:90%"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="update" value="Update"></td>
        </tr>
    </form>
</table>