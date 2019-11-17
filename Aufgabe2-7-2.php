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
                    <?php
                    echo '
                        <h3>Einloggen:</h3> 
                        <br/><br/>  
                    ';
                    // Zeige Formular nur wenn keien Daten übergeben wrrden
                    if(!isset($_POST['email_login']) and !isset($_POST['password_login'])) {
                        include 'login_form.php';
                    }
                    // Prüfe Hash
                    if(isset($_POST['email_login']) and isset($_POST['password_login'])) {
                       $pass = $_POST['password_login'];
                       $mail =  $_POST['email_login'];
                        echo 'Beide Werte übergeben';
                       login($pass,$mail);
                        echo 'Funktion fertig';

                    }
                    else { echo 'Nicht beide Werte übergeben';}
                    ?>
                    <!-- CONTENT END -->
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
        <?php include "footer.php" ?>
</body>
</html>