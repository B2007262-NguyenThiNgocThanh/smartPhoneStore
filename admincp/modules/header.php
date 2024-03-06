<?php
    if(isset($_GET['logout']) && $_GET['logout']==1){
        unset($_SESSION['login']);
        header('Location:login.php');
    }
?>
<div class="header">
    <p>
    <i class="fa fa-user-o" aria-hidden="true"></i>
        <?php 
            if(isset($_SESSION['login'])){ 
                echo $_SESSION['login'];
            }
        ?>
    </p>
    <p>
    <a href="index.php?logout=1" style="color: #fff">
         <i class="fa fa-sign-out" aria-hidden="true"></i>
         Đăng xuất
    </a>
    </p>
</div>
