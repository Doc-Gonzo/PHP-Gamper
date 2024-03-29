<?php
/**
 * Created by PhpStorm.
 * User: mathi
 * Date: 06.10.2019
 * Time: 14:10
 */
require_once "globalFunctions.php";
require_once "menu.php";
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mathias Schaller">

    <title>PHP Aufgabensammlung</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">


    <?php
    if (isset($_COOKIE['cookie_stilwahl'])) {
        $stilwahl = $_COOKIE["cookie_stilwahl"];
    }
    else{
        $stilwahl = 'dark';
    }

    if (isset($_POST['stilwahl'])) {
        $stilwahl =  $_POST["stilwahl"];

        if($stilwahl == 'bright'){
            setcookie("cookie_stilwahl","bright",time()+(3600*24));
        }
        else{
            setcookie("cookie_stilwahl","dark",time()+(3600*24));
        };
    }

        if ($stilwahl == "bright") {
            echo '<link rel="stylesheet" href="css/bright_style.css">';
        }
        else {
            echo'<link rel="stylesheet" href="css/dark_style.css">';
        }

    ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
