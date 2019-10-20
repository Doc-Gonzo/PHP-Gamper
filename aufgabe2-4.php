<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- SIDEBAR -->
    <?php include "sidebar.php" ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <?php include "topbar.php" ?>
            <!-- Begin Page Content -->
            <div class="container-fluid content_wrapper">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Übersicht</h1>
                </div>
                <!-- Content Row -->
                <div class="row main_content">
                    <!--  CONTENT-->
                    <h3>Check Name:</h3>
                    <div></div>
                    <br/><br/>

                    <?php
                    if (!isset($_GET['name'])) {
                        echo '
                             <span>Bitte geben Sie Ihren Namen ein: </span>
                    </br> </br>
                    <form action="aufgabe2-4.php" method="get">
                        <br/> <br/>
                        <input name="name" type="text">
                        <br/> <br/>
                        <input type="submit">
                    </form>
                            ';
                    };
                    ?>

                    <?php
                    if (isset($_GET['name'])) {
                        $givenName = $_GET["name"];
                        checkName($givenName);
                    };

                    echo "<br/><br/>";
                    ?>


                    <!-- Variante 2 -->
                    <h3>Variante 2:</h3>
                    <div></div>
                    <br/><br/>

                    <?php
                    if (!isset($_GET['name2'])) {
                        echo '
                             <span>Bitte geben Sie Ihren Namen ein: </span>
                    </br> </br>
                    <form action="aufgabe2-4.php" method="get">
                        <br/> <br/>
                        <input name="name2" type="text">
                        <br/> <br/>
                        <input type="submit">
                    </form>
                            ';
                    };
                    ?>

                    <?php
                    if (isset($_GET['name2'])) {
                        $givenName = $_GET["name2"];
                        checkName2($givenName);
                    };

                    echo "<br/><br/>";
                    ?>

                    <!-- CONTENT END -->
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
        <?php include "footer.php" ?>
</body>
</html>