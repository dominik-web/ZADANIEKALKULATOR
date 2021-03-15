<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <style>
        body{
            text-align: center;
            background-color: brown;
        }
    </style>
</head>
<body>
    <h1>REJESTRACJA</h1><br><br>
    <form action="logowanie.php" method="post">
        Imie: <input type="text" name="imie"><br><br>

        Nazwisko: <input type="text" name="nazwisko"><br><br>

        Adres: <input type="text" name="adres"><br><br>

        Email: <input type="email" name="email"><br><br>

        Numer tel: <input type="number" name="numer"><br><br>

        Hasło: <input type="password" name="haslo"><br><br>

        Powtórz hasło: <input type="password" name="haslo"><br><br>

        <input type="submit" value="Wyślij" name="submit">
    </form>
    <?php
    
    
    
    ?>
</body>
</html>
<?php $polaczenie->close()?>


