<?php
$html_danhmuc = showdm($dsdm);
$html_dssp = showspchitiet($dssp);
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
            <h1>SẢN PHẨM</h1><br>
            <div class="containerfull mr30">
                <div class="row">
                    <?= $html_dssp ?>
                    </div>
                </div>
                <!-- <div class="box25 mr15 mb">
                    <div class="best"></div>
                    <img src="view/images/14.webp" alt="">
                    <span class="price">$1000</span>
                    <button>Đặt hàng</button>
                </div> -->
            </div>
        </div>


    </div>
</section>