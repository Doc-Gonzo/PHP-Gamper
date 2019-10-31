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
                    
                    <form action="Aufgabe2-7.php" method="POST">
                        <br/> <br/>
                        <label for="Vorname">Vorname</label>
                        <input name="Vorname" type="text">
                        <label for="Nachname">Nachname</label>
                        <input name="Nachname" type="text">
                        <label for="Email">E-Mail</label>
                        <input name="E-Mail" type="text">
                        <br/> <br/>
                        <input type="submit">
                    </form>
                    ';
                    ?>
                    <?php
                    // Prüfen, ob Kommentardaten zum Speichern vorliegen:
                    if(isset($_POST['Vorname']) and isset($_POST['Nachname'])
                    and isset($_POST['E-Mail'])) {

                        $Vorname = $_POST['Vorname'];
                        $Nachname = $_POST['Nachname'];
                        $EMail = $_POST['E-Mail'];
                        // Test der Datenweitergabe
                        echo $Vorname . $Nachname . $EMail;

                        addUser($Vorname,$Nachname,$EMail);
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