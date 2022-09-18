<?php
require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/header.php');
?>
<div id="wrapper">
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/sidebar.php');
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php
            require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/topbar.php');
            ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Booked tables</h1>

                <?php

                if (empty($_GET)) {
                    require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/book/all.php');
                } else {
                    switch ($_GET['page']) {
                        case 'edit':
                            require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/book/edit.php');
                            break;
                        case 'add':
                            require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/book/add.php');
                            break;
                    }
                }
                ?>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php
        require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/stickyfooter.php');
        ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/footer.php');
?>