<body>
    <div class="hero_area">
        <div class="bg-box">
            <img src="assets/images/hero-bg.jpg" alt="">
        </div>
        <!-- header section starts -->
        <?php
        require($_SERVER['DOCUMENT_ROOT'] . '/partials/header_nav.php');
        ?>
        <!-- end header section -->
        <!-- slider section -->
        <?php
        require($_SERVER['DOCUMENT_ROOT'] . '/partials/slider_home.php');
        ?>
        <!-- end slider section -->
    </div>

    <!-- offer section -->
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/offer_section.php');
    ?>
    <!-- end offer section -->

    <!-- menu section -->
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/menu_section.php');
    ?>
    <!-- end menu section -->

    <!-- about section -->
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/about_section.php');
    ?>
    <!-- end about section -->

    <!-- book section -->
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/book_section.php');
    ?>
    <!-- end book section -->

    <!-- client section -->
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/client_section.php');
    ?>
    <!-- end client section -->