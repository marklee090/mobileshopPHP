<?php
    if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
      extract($_SESSION['user']);
      $html_acount = '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        '.$username.'
                        </a> 
                        <ul class="dropdown-menu end-0" style="left: auto;">
                          <li><a class="dropdown-item" href="index.php?pg=myaccount">Thông tin tài khoản</a></li>
                          <li><a class="dropdown-item" href="index.php?pg=dangky">Đăng ký</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="index.php?pg=logout">Đăng xuất</a></li>
                        </ul>
                      </li>';
    } else{
        $html_acount = '<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Tài khoản
                          </a> 
                          <ul class="dropdown-menu end-0" style="left: auto;">
                            <li><a class="dropdown-item" href="index.php?pg=dangnhap">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="index.php?pg=dangky">Đăng ký</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                          </ul>
                        </li>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Di động Mới</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">T-Mobile</a>
      <button class="navbar-toggler" type="button" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pg=sanpham">Sản phẩm</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php?pg=viewcart">Giỏ hàng</a>
          </li>

          <?=$html_acount; ?>
          <!--
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tài khoản
              </a> 
              <ul class="dropdown-menu end-0" style="left: auto;">
                <li><a class="dropdown-item" href="index.php?pg=dangnhap">Đăng nhập</a></li>
                <li><a class="dropdown-item" href="index.php?pg=dangky">Đăng ký</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
              </ul>
            </li>
            -->
      </div>
  </nav>
