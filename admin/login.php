<?php
    session_start();
    include "../model/user.php";
    if(isset($_POST["login"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = checkuser($username,$password);
        if(isset($user)&&(is_array($user))&&(count($user)>0)){
            extract($user);
            if($vaitro==1){
                $_SESSION['user']=$user;
                header('location: index.php');
            } else {
            $tb= "Tài khoản này không có quyền đăng nhập trang quản trị";
            }
        } 
            else {
            $tb="Tài khoản này không tồn tại. Hoặc sai thông tin đăng nhập";
        }
        } 
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="view/css/style.css">
    <style>
        
    </style>
</head>

<body>
    <div class="boxcenter">
        <h2>Login Form</h2>
        <form action="login.php" method="post">
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Tài khoản</b></label>
                <input type="text" placeholder="Nhập tài khoản" name="username" required>

                <label for="psw"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="password" required>

                <?php
                    if(isset($tb)&&($tb!="")){
                        echo "<h3 style='color:red'>".$tb."</h3>";
                    }
                ?>
                <button type="submit" name="login">Đăng nhập</button>
        </form>
    </div>

</body>

</html>