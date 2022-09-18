<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>


 <?php
    $page = "home";
    if (isset($_GET['p'])) {
        switch ($_GET['p']) {
            case 'home':
                $page = 'home';
                break;
            case 'about':
                $page = 'about';
                break;
            case 'book':
                $page = 'book';
                break;
            case 'menu':
                $page = 'menu';
                break;
            case 'cart':
                $page = 'cart';
                break;
        }
    }
    require($_SERVER['DOCUMENT_ROOT'] . "/partials/pages/$page.php");
    ?>

    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
    ?>