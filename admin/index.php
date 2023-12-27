<?php
    session_start();
    ob_start();
    // if(isset($_SESSION['user'])&&(is_array('user'))&&(count($_SESSION['user'])>0)){
    //     $admin = $_SESSION['user'];
    // } else{
    //     header('location: login.php');
    // }
    include "../model/global.php";
    include "../model/connect.php";
    include "../model/user.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";

    include "view/header.php";
    if(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        switch ($pg){
            case 'product_list':
                $product_list = get_dssp_new(100);
                include "view/product_list.php";
                break;
            
            case 'update_product':
                if(isset($_GET['idsp'])&&($_GET['idsp'])>0){
                    $idsp = $_GET['idsp'];
                    $sp = get_sp_by_id($idsp);
                }

                $catalog_list = danhmuc_all();
                include "view/update_product.php";
                break;

            case 'delproduct':
                if(isset($_GET['idsp'])&&($_GET['idsp'])>0){
                    $idsp = $_GET['idsp'];
                    $hinh = IMG_PATH_ADMIN.get_img($idsp);
                    if(is_file($hinh)){
                        unlink($hinh);
                    }
                    sanpham_delete($idsp);           
                }
                $product_list=get_dssp_new(100);
                include "view/product_list.php";
                break;
            case 'add_product':
                $catalog_list = danhmuc_all();
                include "view/add_product.php";
                break;
            case 'addproduct':
                if(isset($_POST['addproduct'])){
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $iddm=$_POST['iddm'];
                    $hinh=$_FILES['hinh']['name'];

                    sanpham_insert($tensp, $giasp, $iddm, $hinh);

                    $target_file = IMG_PATH_ADMIN.$hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file);

                    $product_list=get_dssp_new(100);
                    include "view/product_list.php";
                } else {
                    $catalog_list=get_dssp_new(100);
                    include "view/add_product.php";
                }

            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }
            
    include "view/footer.php";
?>