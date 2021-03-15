<?php
    include_once("polaczenie.php");
    
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $haslo = $_POST['haslo'];
    $powtorzhaslo = $_POST['powtorzhaslo'];

    if($_POST['haslo']== $_POST['powtorzhaslo']){
        $zapytanie_insert = $polaczenie->query("INSERT INTO uzytkownicy(imie, nazwisko, adres, email, tel, haslo, powtorzhaslo) VALUES
         ('$imie','$nazwisko','$adres','$email','$tel','$haslo','$powtorzhaslo');");

         echo "Dodano uzytkownika";
         echo "<br><a href='logowanie.php'> Logowanie do konta</a>";
   
    } else {
        echo "hasła nie są takie same";
        echo "<br><a href='rejestracja.php'> Zarejestruj sie ponownie</a>";
        
    }
    $polaczenie->close();
?>

