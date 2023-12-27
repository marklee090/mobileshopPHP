<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h2>DÀNH CHO BẠN</h2><br><br>
            <a href="#">Thông tin tài khoản</a>
            <a href="#">Lịch sử mua hàng</a>
            <a href="#">Cập nhật thông tin</a>
        </div>
        <div class="boxright">
            <h1>ĐĂNG NHẬP</h1>
            <div class="containerfull mr30">
                <div class="">
                    <h2 style="color: red;">
                        <?php
                        if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")) {
                            echo $_SESSION['tb_dangnhap'];
                            unset($_SESSION['tb_dangnhap']);
                        }
                        ?>
                    </h2>
                    <form action="index.php?pg=login" method="post">
                        <div class="container">
                            <label for="uname"><b>Tài khoản</b></label>
                            <input type="text" placeholder="Nhập tên tài khoản" name="username" id="username" required>

                            <label for="psw"><b>Mật khẩu</b></label>
                            <input type="password" placeholder="Nhập mật khẩu" name="password" id="password" required>

                            <input type="submit" name="dangnhap" value="Đăng nhập"></input>
                    </form>
                </div>
            </div>
        </div>
</section>