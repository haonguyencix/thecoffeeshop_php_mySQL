<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Font Yanone Kaffeesatz -->
    <link
        href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&display=swap&subset=vietnamese"
        rel="stylesheet" />
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- Owl carousel -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../assets/css/aos.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <title>The Coffee House</title>
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'?>

    <!-- Modal signup -->
    <?php include 'signup-modal.php'?>

    <!-- Modal signin -->
    <?php include 'signin-modal.php'?>

    <!-- Modal cart -->
    <?php include 'cart-modal.php'?>


    <!-- Cover -->
    <section class="cover">
        <div id="cover__carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators wow slideInUp">
                <li data-target="#cover__carousel" data-slide-to="0" class="active"></li>
                <li data-target="#cover__carousel" data-slide-to="1"></li>
                <li data-target="#cover__carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="../../assets/img/cover-1.jpg" width="100%" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/cover-2.jpg" width="100%" alt="Second slide" />
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/cover-3.jpg" width="100%" alt="Third slide" />
                </div>
            </div>

            <a class="carousel-control-prev wow jackInTheBox" href="#cover__carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next wow jackInTheBox" href="#cover__carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="menu">
        <div class="container">
            <div class="menu__bg--top">
                <?php include 'leaf-img.php'?>
            </div>
            <h1 class="menu__title section__title">MENU</h1>
            <div class="menu__button">
                <a class="menu__button--link text-center d-block" href="menu-page.php"><span>XEM TẤT CẢ SẢN
                        PHẨM</span></a>
            </div>
            <div class="clear"></div>

            <div class="menu__list mt-5">
                <div class="row">
                    <?php include 'products.php'?>
                </div>
            </div>
        </div>
    </section>

    <section class="stores bg__dark">
        <div class="container">
            <h1 class="stores__title section__title">CỬA HÀNG</h1>
            <div class="signature__store mt-4">
                <div class="row align-items-center">
                    <div data-aos="fade-right" class='col-lg-6 col-md-12 col-sm-12 col-xs-12 padding__right'>
                        <div class="signature__store--text">
                            <h5>THE COFFEE HOUSE SIGNATURE</h5>
                            <p>Với những nghệ nhân rang tâm huyết và đội ngũ Barista tài năng cùng những câu chuyện cà
                                phê đầy cảm hứng, ngôi nhà Signature 19B Phạm Ngọc Thạch, Q.3, TP.HCM là không gian dành
                                riêng cho những ai trót yêu say đắm hương vị của những hạt cà phê tuyệt hảo.</p>
                        </div>
                    </div>
                    <div data-aos="fade-left" class='col-lg-6 col-md-12 col-sm-12 col-xs-12 padding__left'>
                        <div class="signature__store--img">
                            <img src="//file.hstatic.net/1000075078/file/3e0a8783_master.jpg" width="100%"
                                alt="thecoffeehouse-signature">
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="stores__list mt-4">
                <div class="owl-carousel">
                    <?php include 'stores.php'?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Owl carousel -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        nav: true,
        loop: true,
        smartSpeed: 400,
        margin: 30,
        navText: ["<i class='fa fa-arrow-circle-left'></i>", "<i class='fa fa-arrow-circle-right'></i>"],
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    </script>
    <script src="../../assets/js/aos.js"></script>
    <script>AOS.init()</script>
    <script src="../../assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="../models/Orders.js"></script>
    <script src="../models/OrderItem.js"></script>
    <script src="../services/OrderService.js"></script>
    <script src="../services/UserService.js"></script>
    <script src="../controllers/main.js"></script>
</body>

</html>