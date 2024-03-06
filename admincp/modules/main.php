<div class="clear">
    <div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $temp = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $temp = '';
            $query = '';
        }
        if($temp == 'quanlyloaisp' && $query=='them'){
            include("modules/quanlyloaisp/them.php");
            include("modules/quanlyloaisp/lietke.php");
        }elseif($temp == 'quanlyloaisp' && $query=='edit'){
            include("modules/quanlyloaisp/sua.php");
        }elseif($temp == 'quanlysp' && $query=='them'){
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        }elseif($temp == 'quanlysp' && $query=='edit'){
            include("modules/quanlysp/sua.php");
        }elseif($temp == 'quanlykh' && $query=='lietke'){
            include("modules/quanlykh/lietke.php");
        }elseif($temp == 'quanlydonhang' && $query=='lietke'){
            include("modules/quanlydonhang/lietke.php");
        }elseif($temp == 'donhang' && $query=='xemdonhang'){
            include("modules/quanlydonhang/xemdonhang.php");
        }elseif($temp == 'quanlynpp' && $query=='them'){
            include("modules/quanlynpp/them.php");
            include("modules/quanlynpp/lietke.php");
        }elseif($temp == 'quanlynpp' && $query=='edit'){
            include("modules/quanlynpp/sua.php");
        }else{
            // include("modules/dashboard.php");
            include("modules/quanlyloaisp/them.php");
            include("modules/quanlyloaisp/lietke.php");
        }
        
        // elseif($temp == 'quanlykh' && $query=='edit'){
        //     include("modules/quanlykh/sua.php");
        //}
        // elseif($temp == 'quanlynpp' && $query=='them'){
        //     include("modules/quanlynpp/them.php");
        //     include("modules/quanlynpp/lietke.php");
        // }elseif($temp == 'quanlynpp' && $query=='edit'){
        //     include("modules/quanlynpp/sua.php");
        // }
        
    ?>
    </div>
</div>