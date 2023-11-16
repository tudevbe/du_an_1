<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    
    switch ($act) {
        case 'qldm':
            include "./layout/danhmuc.php";
            break;
        case 'qlsp':
            include "./layout/sanpham.php";
            break;
        case 'qlnd':
            include "./layout/user.php";
            break;
        case 'qlbl':
            include "./layout/binhluan.php";
            break;
        case 'qlhd':
            include "./layout/hoadon.php";
            break;
        case 'qlht':
            include "./layout/hethong.php";
            break; 
        case 'qlbv':
            include "./layout/baiviet.php";
            break;  
        case 'qllh':
            include "./layout/lienhe.php";
            break;    
        
        default:
            # code...
            break;
    }
    
}
?>