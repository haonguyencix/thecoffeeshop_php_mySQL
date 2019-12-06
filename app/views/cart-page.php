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
    <!-- Animate on Scroll -->
    <link rel="stylesheet" href="../../assets/css/aos.css">
    <!-- Animate -->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <title>The Coffee House</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'?>

    <!-- Modal signup -->
    <?php include 'signup-modal.php'?>

    <!-- Modal signin -->
    <?php include 'signin-modal.php'?>

    <section class="cart">
        <div class="container">
            <h1 class="cart__title section__title">GIỎ HÀNG</h1>
            <div class="cart__content mt-4">
                <div class="row align-items-center">
                    <div data-aos="fade-right" class='col-lg-8 col-md-12 col-sm-12 col-xs-12'>
                        <div class="order__list">
                            Chưa phát triển chức năng này T.T
                        </div>
                    </div>
                    <div data-aos="fade-left" class='col-lg-4 col-md-12 col-sm-12 col-xs-12'>

                    </div>
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

    <script src="../../assets/js/aos.js"></script>
    <script>
    AOS.init()
    </script>
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