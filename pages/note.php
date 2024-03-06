<?php

session_start();

function addHeader(){
	echo '
	<div class="header group">
   
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store"> 
            </a>
        </div> 

        <div class="content">
            <!--form tìm kiếm-->
            <div class="search-header">
                <form class="input-search" method="get" action="index.php">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Bạn tìm gì...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </form>
            </div> 

            <div class="member">
                <div class="member">
                    <a onclick="checkTaiKhoan()" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                    <div class="menuMember hide">
                        <a href="nguoidung.php">Trang người dùng</a>
                        <a onclick="checkDangXuat();">Đăng xuất</a>
                    </div>
                </div> 

                <!-- giỏ hàng -->
                <div class="cart">
                    <a href="...">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div>
            </div>

        </div> 
    </div> ';

}

