<?php include 'signin-function.php' ?>

<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <ul class="logo list-unstyled mb-0">
                <li>
                    <a href="index.php"><img src="../../assets/img/main-logo.png" alt="logo" width="100%" /></a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav align-items-center">
                    <li class="menu__item">
                        <a class="menu__link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="menu-page.php">Thực đơn</a>
                    </li>
                    <?php
                if (isset($_SESSION['username']) && $_SESSION['username']){
                    ?>
                    <li class="menu__item dropdown">
                        <a class="menu__link" id="triggerId" data-toggle="dropdown"
                            href="#"><?php echo $_SESSION['username'] ?><i class="fa fa-angle-down ml-2"></i></a>
                        <div class="dropdown-menu mt-2" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off mr-2"></i>Đăng xuất</a>
                        </div>
                    </li>
                    <?php 
                } else {
                    ?>
                    <li class="menu__item">
                        <button type="button" class="btn btn__signin" data-toggle="modal" data-target="#signin">
                            Đăng nhập
                        </button>
                    </li>
                    <li class="menu__item">
                        <button type="button" class="btn btn__signup" data-toggle="modal" data-target="#signup">
                            Đăng kí
                        </button>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </nav>
    </div>
</header>