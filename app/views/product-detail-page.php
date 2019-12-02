<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&display=swap&subset=vietnamese"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>The Coffee House</title>
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'?>

    <!-- Modal signup -->
    <?php include 'signup-modal.php'?>

    <!-- Modal signin -->
    <?php include 'signin-modal.php'?>

    <!-- Product detail container -->
    <section class="product__detail">
        <div class="container">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php include 'breadcrumb-3.php'?>
                </ol>
            </nav>

            <!-- Product information -->
            <div class="row align-items-center">
                <?php include 'product-detail-container.php'?>
            </div>

        </div>
    </section>

    <section class="youlike bg__dark">
        <div class="container">
            <h1 class="youlike__title section__title">CÓ THỂ BẠN THÍCH</h1>
            <div class="youlike__list mt-5">
                <div class="row">
                    <?php include 'youlike.php'?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>