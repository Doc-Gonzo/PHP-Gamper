<?php
/**
 * Created by PhpStorm.
 * User: mathi
 * Date: 06.10.2019
 * Time: 17:21
 */
function showServerData()
{
    echo '<h3>Serverdaten anzeigen:</h3>';
    foreach ($_SERVER as $key => $value) {
        echo $key, " ", $value . '<br/> <br/>';
    }
    echo "User Agent: ", $_SERVER['HTTP_USER_AGENT'];

}
function browserWeiche($user_agent)
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $regex_firefox = "/Firefox/";
    $regex_chrome = "/Chrome/";
    $regex_edge = "/Edge/";

    if ((preg_match($regex_firefox, $user_agent))) {
        echo "<br/> <br/>", "Firefox erkannt";
    }
    if ((preg_match($regex_chrome, $user_agent))) {
        echo "<br/> <br/>", "Chrome erkannt";
    }
    if ((preg_match($regex_edge, $user_agent))) {
        echo "<br/> <br/>", "Edge erkannt";
    }
}

function checkEmail($givenMail)
{
    $emailString = trim($givenMail);
    $pattern = '/[a-z0-9.-_]+@[a-z.]+/';
    if (preg_match($pattern, $emailString) === 1) {
        return true;
    } else {
        echo "Mailadresse falsch";
        return false;
    }
}

function checkName($givenName)
{
    $nameString = trim($givenName);
    $pattern = '/[a-z0-9.-_]/';
    if (preg_match($pattern, $nameString) === 1) {
        return true;
    } else {
        echo "Name entspricht nicht den vorgaben <br/> <br/>";
        return false;
    }
}

function checkName2(&$givenName)
{
    $nameString = trim($givenName);
    $pattern = '/[a-z0-9.-_]/';
    if (preg_match($pattern, $nameString) === 1) {
        return true;
    } else {
        echo "Name entspricht nicht den vorgaben";
        return "Name falsch Name entspricht nicht den Vorgaben";
    }
}

function studentSort(array $studentList, $asc = true)
{
    if ($asc == true) {
        asort($studentList);
    } else (
    arsort($studentList)
    );
    echo "<ul>";
    foreach ($studentList as $key => $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}

function studentSortImplode(array $studentList, $asc = true)
{
    if ($asc == true) {
        asort($studentList);
    } else (
    arsort($studentList)
    );
    echo "<ul><li>" . implode("</li><li>", $studentList) . "</li></ul>";
}

function addUser($Vorname, $Nachname, $EMail)
{

    $db_link = new mysqli (
        '127.0.0.1',
        'Matze',
        'php',
        'gamper_aufgaben'
    );
    if (!$db_link) {
        echo 'NOT CONNECTED';
    }

    // Daten zum Speichern in der Datenbank vorbereiten:
    $VornameStripped = stripslashes($Vorname);
    $NachnameStripped = stripslashes($Nachname);
    $EMailStripped = stripslashes($EMail);

    if (checkName($VornameStripped) AND checkName($NachnameStripped) AND checkEmail($EMailStripped)) {

        $sqleintrag = "
                          INSERT INTO `tabelle1`
                          ( 
                          `Vorname` , `Nachname` , `E-Mail`
                          ) 
                          VALUES
                          (
                          '$VornameStripped', '$NachnameStripped', '$EMailStripped'
                          );
                        ";
        $db_erg = mysqli_query($db_link, $sqleintrag)
        or die("Anfrage fehlgeschlagen: " . mysqli_error());
    } else {
        echo 'Ihre Angaben entsprechen nicht dem Standard';
    }
    exit;
}

?>