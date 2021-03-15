<?php

/**
 * skrypt pobiera wszystkie rekordy z bazy danych
 * korzystam z dwóch metod : list mysqli fetch array
 */
    include_once("polaczenie.php");
    
    $zapytanie_SELECT = $polaczenie->query("SELECT idu,imie,nazwisko,adres,tel FROM uzytkownicy;");
    
    
    while (list($idu,$mojaNazwa,$nazwisko,$adres,$tel)=mysqli_fetch_array($zapytanie_SELECT)){
        echo("
            IDU: $idu , NAZWA: $mojaNazwa , NAZWISKO: $nazwisko , ADRES: $adres , TELEFON: $tel<br>
        ");
    }


    $polaczenie->close();
?>