<?php
$html_dssp_new = showsp($dssp_new);
$html_dssp_best = showsp($dssp_best);
$html_dssp_view = showsp($dssp_view);
?>


<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="view/images/banner.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="view/images/banner1.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="view/images/banner2.webp" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="containerfull">
    <div class="container">
        <h1 class="fw-bolder">SẢN PHẨM HOT</h1><br><br>
        <div class="row mb-4">
            <?= $html_dssp_best ?>
            <!-- <div class="box25 mr15">
                <div class="best"></div>
                <img src="view/images/14.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div>
            <div class="box25 mr15">
                <div class="best"></div>
                <img src="view/images/14plus.webp" alt="">
                <span class="price">$1000</span>
                <button>Đặt hàng</button>
            </div> -->
        </div>


        <div class="container">
            <h1 class="fw-bolder">SẢN PHẨM MỚI</h1><br>
            <div class="row mb-4">
                <?= $html_dssp_new ?>
            </div>
        </div>
        <!-- <div class="card box25 mr15">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
             -->

        <div class="container">
            <h1 class="fw-bolder">SẢN PHẨM NHIỀU LƯỢT XEM</h1><br>
            <div class="row">
                <?= $html_dssp_view ?>
            </div>
        </div>

        <!-- <div class="card box25 mr15">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            -->

        </div>

        </div>
</section>


<section class="containerfull bg1 padd50">
    <div class="container">
        <h1 class="fw-bolder">DANH MỤC HOT</h1>
        <div class="row">
            <h2>Iphone</h2>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="row">
            <h2>Macbook</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="view/images/14.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
</section>