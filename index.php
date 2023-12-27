<?php
session_start();
ob_start();
// unset($_SESSION['giohang']);
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}

include "model/connect.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include 'view/header.php';
include "model/giohang.php";
include "model/user.php";

// Lấy data cho trang chủ
$dssp_new = get_dssp_new(4);
$dssp_best = get_dssp_best(2);
$dssp_view = get_dssp_view(4);
// $dssp_iphone = get_dssp_iphone();
// $dssp_macbook = get_dssp_macbook();

if (!isset($_GET['pg'])) {
    include "view/home.php";
} else {
    switch ($_GET['pg']) {
        case 'danhmuc':
            break;

        case 'sanpham':
            $dsdm = danhmuc_all();
            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
            }
            $dssp = get_dssp($iddm, 12);
            include "view/sanpham.php";
            break;

        case 'sanphamchitiet':
            if (isset($_GET['idsp'])) {
                $idsp = $_GET['idsp'];
                $spchitiet = get_sp_by_id($idsp);
                $dsdm = danhmuc_all();
                $iddm = $spchitiet['iddm'];
                $splienquan = get_dssp_lienquan($iddm, $idsp, 4);
                include "view/sanphamchitiet.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'viewcart':
            if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                unset($_SESSION["giohang"]);
                // $_SESSION["giohang"]=[];
                header(('location: index.php?pg=viewcart'));
            } else {
                if (isset($_SESSION["giohang"])) {
                    $tongdonhang = get_tongdonhang();
                }
                // include "view/viewcart.php";
            }

            if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
                $tongdonhang = $_POST['tongdonhang'];
                $mavoucher = $_POST['mavoucher'];
                $giatrivoucher = 10;
            }
            $thanhtoan = $tongdonhang - $giatrivoucher;
            include "view/viewcart.php";

            break;

        case 'addcart':
            // Lấy dữ liệu từ form
            if (isset($_POST['addcart'])) {
                $tensp = $_POST['tensp'];
                $hinh = $_POST['hinh'];
                $giasp = $_POST['giasp'];
                $soluong = $_POST['soluong'];
                $sp = array("tensp" => $tensp, "hinh" => $hinh, "giasp" => $giasp, "soluong" => $soluong);
                array_push($_SESSION['giohang'], $sp);
                header(('location: index.php?pg=viewcart'));
            }
            // echo var_dump($_SESSION['giohang']);
            break;

        case 'adduser':
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                user_insert($username, $password, $email);
            }
            include "view/dangnhap.php";
            break;

        case 'updateuser':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $diachi = $_POST["diachi"];
                $phone = $_POST["phone"];
                $vaitro = 0;
                $idkh = $_POST["idkh"];
                user_update($username, $password, $email, $diachi, $phone, $vaitro, $idkh);
            }
            include "view/myaccount_confirm.php";
            break;

        case 'dangnhap':
            include "view/dangnhap.php";
            break;
        case 'dangky':
            include "view/dangky.php";
            break;

        case 'myaccount':
            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                include "view/myaccount.php";
            }
            break;

        case 'login':
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                $kq = checkuser($username, $password);
                if (is_array($kq) && (count($kq))) {
                    $_SESSION['user'] = $kq;
                    header('location: index.php');
                } else {
                    $tb = "Tài khoản không tồn tại hoặc thông tin đăng nhập sai";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('location: index.php?pg=dangnhap');
                }
            }
            break;

        case 'logout':
            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                unset($_SESSION['user']);
            }
            header('location: index.php');
            break;
        default:
            include "view/home.php";
            break;
    }
}

include 'view/footer.php';
