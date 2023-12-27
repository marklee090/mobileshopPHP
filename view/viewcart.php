<?php
    $html_cart = viewcart();
?>

<section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>GIỎ HÀNG</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?=$html_cart ?>
            </table>
            <a href="index.php?pg=viewcart&del=1">Xóa toàn bộ</a>
        </div>
        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
            <div class="total">
                <h3>Tổng: <?=$tongdonhang?></h3>
            </div>
            <div class="coupon">
                <form action="index.php?pg=viewcart&voucher=1" method="post">
                    <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>"> 
                    <input type="text" name="mavoucher" placeholder="Nhập voucher">
                    <button type="submit">Nhập mã</button>
                </form>
            </div> <br>
            <div class="total">
                <h3>Tổng thanh toán: <?=$thanhtoan?></h3>
            </div>
            <button>Thanh toán</button>
        </div>


        </div>
</section>