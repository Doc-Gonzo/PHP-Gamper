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
                    <h3>Array Sortieren:</h3> 
                    <br/><br/>';

                    if (!isset($_GET['number1'])) {
                        echo '
                            <form action="aufgabe2-5.php" method="get">
                                <br/> <br/>
                                <label>Erste Zahl</label><br/>
                                <input name="number1" type="text"><br/>
                                <label>Zweite Zahl</label><br/>
                                <input name="number2" type="text"><br/>
                                <label>Dritte Zahl</label><br/>
                                <input name="number3" type="text">
                                <br/> <br/>
                                <input type="submit">
                            </form>
                       ';
                    };
                    if (isset($_GET['number1'])) {

                        if(is_numeric($_GET['number1']) AND is_numeric($_GET['number2']) AND is_numeric($_GET['number3'])  )
                        {
                            $number1 =  $_GET["number1"];
                            $number2 =  $_GET["number2"];
                            $number3 =  $_GET["number3"];
                            $sortableArray = array($number1, $number2,$number3);
                            rsort($sortableArray);
                            echo 'Korrekte Reihenfolge: ' . $sortableArray[0] . '  ' . $sortableArray[1] . '  ' . $sortableArray[2];
                            echo "<br/><br/>";
                        }
                        else {
                            echo 'Sie haben Buchstaben statt Zahlen verwendet. Böser Junge!';
                        }
                    }
                    ?>
                    <br/><br/>
                    <h3>Studentenliste:</h3>
                    <?php
                        echo ("Thomas " . "Peter " . "Patrizia " . "Mathias " . "Juergen " . "Hasan " . "Fabio " . "Deniz <br/> </br/>");
                        $studentenListe = array("Thomas", "Peter", "Patrizia", "Mathias", "Juergen", "Hasan", "Fabio", "Deniz");
                        echo "Mit Schleife sortiert: ";
                         echo "<br/><br/>";
                        studentSort($studentenListe);
                        echo "<br/><br/>";
                        echo " </br> Mit implode ausgegeben sortiert: ";
                        studentSortImplode($studentenListe);
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