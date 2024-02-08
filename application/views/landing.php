<html>

<head>
    <link rel="stylesheet" href="<?= site_url('asset') ?>/landing/font-awesome/css/font-awesome.css">
    <!-- "<?= site_url('asset') ?>/landing/dist/css/app.css" -->
    <link rel="stylesheet" href="<?= site_url('asset') ?>/landing/css/style.css">
</head>

<body>
    <header>
        <div id="menu-bar" class="fa fa-bars"></div>
        <a href="#" class="logo">NAFYDI SECONDBRAND</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="<?= site_url('home') ?>" />Produk</a>
            <a href="#fearured">Fitur</a>
            <a href="#blog">Blog</a>
            <a href="#news">Berita</a>
        </nav>
        <div class="icons">
            <a href="<?= site_url('register') ?>"><i class="fa fa-user"></i></a>
        </div>
    </header>
    <!--end header-->
    <section class="home" id="home">
        <div class="slide-container active">
            <div class="slide">
                <div class="content">
                    <span>Nike Balance Shoes</span>
                    <h3>New Balance 327</h3>
                    <p>
                        Temukan gaya dan kenyamanan sejati dengan New Balance 327 - sneakers ikonik yang memadukan desain retro dengan performa modern. Dapatkan sepatu Anda sekarang
                    </p>
                    <!-- <a href="#" class="btn">add to card</a> -->
                </div>
                <div class="image">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu1.png" class="shoe">
                </div>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <span>Nike Sport Shoes</span>
                    <h3>Nike Metcon Shoes</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit
                        Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta
                        sit iure neque voluptate.
                    </p>
                    <a href="#" class="btn">add to card</a>
                </div>
                <div class="image">
                    <img src="<?= site_url('asset') ?>/landing/img/" class="shoe">
                </div>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <span>Nike Sport Shoes</span>
                    <h3>Nike Metcon Shoes</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit
                        Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta
                        sit iure neque voluptate.
                    </p>
                    <a href="#" class="btn">add to card</a>
                </div>
                <div class="image">
                    <img src="<?= site_url('asset') ?>/landing/img/slide/3.png" class="shoe">
                </div>
            </div>
        </div>
        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <span>Nike Sport Shoes</span>
                    <h3>Nike Metcon Shoes</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit
                        Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta
                        sit iure neque voluptate.
                    </p>
                    <a href="#" class="btn">add to card</a>
                </div>
                <div class="image">
                    <img src="<?= site_url('asset') ?>/landing/img/slide/4.png" class="shoe">
                </div>
            </div>
        </div>

        <div id="prev" class="fa fa-angle-left" onclick="prev();"></div>
        <div id="next" class="fa fa-angle-right" onclick="next();"></div>
    </section>
    <!--end home-->
    <section class="product" id="product">
        <h1 class="heading">latest <span>Products</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu2.png" alt="">
                    <h3>Louis Vuitton Trainer Sneaker</h3>
                    <div class="price">Rp 400.000 <span>Rp 500.000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu3.png" alt="">
                    <h3>Nike Air Jordan Travis Scoot Low</h3>
                    <div class="price">Rp 300.000 <span>Rp 450.000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu4.png" alt="">
                    <h3>Nike Air Jordan 4 Retro</h3>
                    <div class="price">RP 320.000 <span>Rp 400.000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu5.png" alt="">
                    <h3>Nike Air Jordan 4 Retro</h3>
                    <div class="price">Rp 320.000 <span>Rp 400.000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu6.png" alt="">
                    <h3>New Balance 580</h3>
                    <div class="price">Rp 320.000 <span>Rp 500.000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-share"></a>
                    <a href="#" class="fa fa-eye"></a>
                </div>
                <div class="content">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu7.png" alt="">
                    <h3>New Balance 327</h3>
                    <div class="price">Rp 250.000 <span>Rp 500.000</span></div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product-->
    <section class="featured" id="fearured">
        <h1 class="heading">New <span>Product</span></h1>
        <div class="row">
            <div class="image-container">
                <div class="big-image">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu8.png" alt="" class="big-image-1">
                </div>
            </div>
            <div class="content">
                <h3>Nike Air Jordan Low 1</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Ikon gaya dan kenyamanan. Desain rendah, detail klasik, cocok untuk gaya kasual dan sporty.
                </p>
                <div class="price">Rp 300.000</div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
        <div class="row">
            <div class="image-container">
                <div class="big-image">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu9.png" alt="" class="big-image-2">
                </div>
            </div>
            <div class="content">
                <h3>Nike Air Jordan Low 2</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Ikon gaya dan kenyamanan. Desain rendah, detail klasik, cocok untuk gaya kasual dan sporty.
                </p>
                <div class="price">Rp 300.000</div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
        <div class="row">
            <div class="image-container">
                <div class="big-image">
                    <img src="<?= site_url('asset') ?>/landing/img/sepatu10.png" alt="" class="big-image-3">
                </div>
            </div>
            <div class="content">
                <h3>Nike Air Jordan Low 3</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Ikon gaya dan kenyamanan. Desain rendah, detail klasik, cocok untuk gaya kasual dan sporty.
                </p>
                <div class="price">Rp 300.000</div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
    </section>
    <!--end featured-->

</body>

</html>

<script src="js/script.js"></script>
