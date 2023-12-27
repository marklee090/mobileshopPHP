<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h2>DÀNH CHO BẠN</h2><br><br>
            <a href="#">Thông tin tài khoản</a>
            <a href="#">Lịch sử mua hàng</a>
            <a href="#">Cập nhật thông tin</a>
        </div>
        <div class="boxright">
            <h1>THÔNG TIN TÀI KHOẢN</h1>
            <div class="containerfull mr30">
                <div class="col6 imgchitiet">
                    <h2>Login Form</h2>
                    <form action="index.php?pg=updateuser" method="post">
                        <div class="container">
                            <label for="uname"><b>Tài khoản</b></label>
                            <input type="text" placeholder="Nhập tên tài khoản" value="<?=$username?>" name="username" id="username" required>

                            <label for="psw"><b>Mật khẩu</b></label>
                            <input type="password" placeholder="Nhập mật khẩu" value="<?=$password?>" name="password" id="password" required>

                            <label for="psw"><b>Email</b></label>
                            <input type="email" placeholder="Nhập email" value="<?=$email?>" name="email" id="email" required>

                            <label for="psw"><b>Địa chỉ</b></label>
                            <input type="text" placeholder="Nhập địa chỉ" value="<?=$diachi?>" name="diachi" id="diachi" required>

                            <label for="psw"><b>Số điện thoại</b></label>
                            <input type="text" placeholder="Nhập sđt" value="<?=$phone?>" name="phone" id="phone" required>
                            
                            <input type="hidden" name="idkh" value="<?=$idkh?>">
                            <input type="submit" name="capnhat" value="Cập nhật"></input>
                    </form>
                </div>
            </div>
        </div>
</section>