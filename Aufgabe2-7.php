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
                        <h3>Benutzer anlegen:</h3> 
                        <br/><br/>  
                    ';
                    include 'login_form.php'
                    ?>
                    <?php
                    // Prüfen, ob Kommentardaten zum Speichern vorliegen:
                    if(isset($_POST['Vorname']) and isset($_POST['Nachname'])
                    and isset($_POST['E-Mail']) and isset($_POST['password_1']) and isset($_POST['password_2'])) {

                        $Vorname = $_POST['Vorname'];
                        $Nachname = $_POST['Nachname'];
                        $EMail = $_POST['E-Mail'];
                        $pass1 = $_POST['password_1'];
                        $pass2 = $_POST['password_2'];
                        if ($_POST['password_1'] !== $_POST['password_2']) {
                            echo 'Passwort stimmt nicht überein.';
                        }
                        else {
                            addUser($Vorname, $Nachname, $EMail, $pass1);
                        }
                    }
                    ?>
                    <!-- CONTENT END -->
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
        <?php include "footer.php" ?>
</body>
</html>