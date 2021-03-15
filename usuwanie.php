<?php 
 
 
$a = trim($_GET['a']); 
$idu = trim($_GET['idu']); 
 
if($a == 'del' and !empty($idu)) { 
 
    mysql_query("DELETE FROM 15-0302021-grupa3 WHERE idu='$idu'") 
    or die('Błąd zapytania: '.mysql_error()); 
 
    echo 'Rekord został usunęty z bazy'; 
 
 
 
    echo "</table>"; 
  echo "<td> 
<br /> <br />
       <a href="index.php">powrut</a>  
 
       </td>"; 
} 
 
?> 