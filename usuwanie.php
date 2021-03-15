
  <?php 
 
 
$a = trim($_GET['a']); 
$idu = trim($_GET['idu']); 
 
if($a == 'del' and !empty($ID_Klient)) { 
 
    mysql_query("DELETE FROM 15-03-2021-grupa3 WHERE idu='$idu'") 
    or die('Błąd zapytania: '.mysql_error()); 
 
    echo 'Rekord został usunęty z bazy'; 
/>
