<!--
•	Erstelle eine Funktion, die drei Parameter bekommt: den Tag, den Monat und das Jahr.
•	Die Idee: Die Funktion bekommt ein Geburtsdatum übergeben und errechnet das Alter in Jahren.
•	Das Alter in Jahren soll zurückgegeben werden.
•	Erzeuge zum Testen einige Methodenaufrufe im Content-Bereich mit verschiedenen Parametern.
•	HINWEIS: du wirst mktime() benötigen und mit Timestamps arbeiten müssen. Achte auf das Setzen der richtigen Zeitzone.
•	Hinweis 2: Überprüfe, ob die Parameter den richtigen Typ haben und nicht leer sind! Verwende dazu Funktionen der Art is_int(), is_array(),... Bemühe dazu die Online-Doku und suche dir die passenden Funktionen


-->

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
                    <h3>Alter berechnen:</h3> 
                    <br/><br/>';
                    /* Wenn ohne Wert */
                    if (!isset($_GET['tag'])) {
                        echo '
                            <form action="aufgabe2-6.php" method="get">
                                <br/> <br/>
                                <label>Tag</label>
                                <input name="tag" type="text">
                                <label>Monat</label>
                                <input name="monat" type="text">
                                <label>Jahr</label>
                                <input name="jahr" type="text">
                                <br/> <br/>
                                <input type="submit">
                            </form>
                       ';
                    };
                    /* Wenn mit Wert */
                    if (isset($_GET['tag'])) {
                        $tag =  $_GET["tag"];
                        $monat =  $_GET["monat"];
                        $jahr =  $_GET["jahr"];
                        checkAlter($tag,$monat,$jahr);
                    }
                    /* Funktion */
                    function checkAlter($tag,$monat,$jahr)
                    {
                        $jetzt = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        $gebur = mktime(0, 0, 0, $monat, $tag, $jahr);
                        $age   = intval(($jetzt - $gebur) / (3600 * 24 * 365));

                        echo 'Sie sind ' . $age . ' Jahre alt';
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


