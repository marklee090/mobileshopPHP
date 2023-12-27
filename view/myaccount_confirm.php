<?php
if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
    extract($_SESSION['user']);
    $user_infor = get_user($idkh);
    extract($user_infor);
}
?>

<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h2>DÀNH CHO BẠN</h2><br><br>
            <a href="#">Thông tin tài khoản</a>
            <a href="#">Lịch sử mua hàng</a>
            <a href="#">Cập nhật thông tin</a>
        </div>
        <div class="boxright">
            <h1>THÔNG TIN ĐÃ ĐƯỢC CẬP NHẬT</h1>
            <div class="containerfull mr30">
                <div class="col6">
                    <div class="row">
                        <div class="col_25">
                            <label for="uname"><b>Tài khoản: </b></label>
                        </div>
                        <div class="col_75">
                            <?= $username ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_25">
                            <label for="psw"><b>Mật khẩu: </b></label>
                        </div>
                        <div class="col_75">
                            <?= $password ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_25">
                            <label for="psw"><b>Email: </b></label>
                        </div>
                        <div class="col_75">
                            <?= $email ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_25">
                            <label for="psw"><b>Địa chỉ: </b></label>
                        </div>
                        <div class="col_75">
                            <?= $diachi ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col_25">
                            <label for="psw"><b>Số điện thoại: </b></label>
                        </div>
                        <div class="col_75">
                            <?= $phone ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>