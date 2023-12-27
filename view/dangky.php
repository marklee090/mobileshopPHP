<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h2>DÀNH CHO BẠN</h2><br><br>
            <a href="#">Thông tin tài khoản</a>
            <a href="#">Lịch sử mua hàng</a>
            <a href="#">Cập nhật thông tin</a>
        </div>
        <div class="boxright">
            <h1>ĐĂNG KÝ</h1>
            <div class="containerfull mr30">
                <div class="col6 imgchitiet">
                    <h2>Login Form</h2>
                    <form action="index.php?pg=adduser" method="post">
                        <div class="container">
                            <label for="uname"><b>Tài khoản</b></label>
                            <input type="text" placeholder="Nhập tên tài khoản" name="username" id="username" required>

                            <label for="psw"><b>Mật khẩu</b></label>
                            <input type="password" placeholder="Nhập mật khẩu" name="password" id="password" required>

                            <label for="psw"><b>Nhập lại Mật khẩu</b></label>
                            <input type="password" placeholder="Nhập lai mật khẩu" name="confirm_password" required>

                            <label for="psw"><b>Email</b></label>
                            <input type="email" placeholder="Nhập email" name="email" id="email" required>

                            <input type="submit" name="dangky" value="Đăng ký"></input>
                    </form>
                </div>
            </div>
        </div>
</section>