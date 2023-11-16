<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    
    switch ($act) {
        case 'qldm':
            include "./layout/danhmuc/danhmuc.php";
            break;
        case 'qlsp':
            include "./layout/sanpham/sanpham.php";
            break;
        case 'qlnd':
            include "./layout/user/user.php";
            break;
        case 'qlbl':
            include "./layout/binhluan/binhluan.php";
            break;
        case 'qlhd':
            include "./layout/hoadon/hoadon.php";
            break;
        case 'qlht':
            include "./layout/hethong/hethong.php";
            break; 
        case 'qlbv':
            include "./layout/baiviet/baiviet.php";
            break;  
        case 'qllh':
            include "./layout/lienhe/lienhe.php";
            break;    
        
        default:
            # code...
            break;
    }
    
}
?>