<?php
$html_danhmuc = showdm($dsdm);
extract($spchitiet);
$html_sp_lienquan = showsp($splienquan);
?>

<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h1>DANH MỤC</h1><br><br>
            <?= $html_danhmuc ?>
            <!-- <a href="#">Cà phê</a>
                <a href="#">Trái cây</a>
                <a href="#">Trà</a>
                <a href="#">Bánh</a> -->
        </div>
        <div class="boxright">
            <h1>SẢN PHẨM CHI TIỂT</h1><br>
            <div class="containerfull mr30">
                <div class="col6 imgchitiet">
                    <img src="view/images/<?= $hinh ?>">
                </div>
                <div class="col6 textchitiet">
                    <h2><?= $tensp ?></h2>
                    <h4><strong><?= $giasp ?> VND</strong></h4>
                    <form action="index.php?pg=addcart" method="post">
                        <input type="hidden" name="tensp" value="<?= $tensp ?>">
                        <input type="hidden" name="hinh" value="<?= $hinh ?>">
                        <input type="hidden" name="giasp" value="<?= $giasp ?>">
                        <input type="number" name="soluong" id="" min="1" value="1" max="10">
                        <button type="submit" name="addcart">Đặt hàng</button>
                    </form>
                </div>

            </div>
            <hr>
            <h1>SẢN PHẨM LIÊN QUAN</h1>
            <div class="containerfull mr30">
                <div class="row">
                <?= $html_sp_lienquan ?>
                </div>
                
                <!-- <div class="box25 mr15 mb">
                        <div class="best"></div>
                        <img src="images/sp1.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    -->
            </div>
        </div>


    </div>
</section>