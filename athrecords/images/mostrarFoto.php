<?php 
if(isset($_GET['id'])) {
error_reporting(E_ALL); 
ini_set('mostrar errores:', 1); 

/* Algunas variables */ 
$DBhost = "localhost"; 
$DBuser = "deportes"; 
$DBpass = "deportes"; 
$DBName = "bd_registro"; 
$table = "tbl_foto"; 

$link = mysql_connect($DBhost, $DBuser, $DBpass) 
OR die('CONN ERROR:<br />' .mysql_error()); 

$db = mysql_select_db($DBName) 
OR die('DB ERROR:<br />' .mysql_error()); 

$query = "select * from $table where cedula_atleta='".$_GET['id']."'"; 
$result = mysql_query($query) 
OR die('QUERY ERROR:<br />' .mysql_error()); 

if ( mysql_num_rows($result) == 1 ) 
{ 
$data = mysql_result($result, 0, 'foto_atleta'); 

	header("Content-Type: image/jpg"); 
	header("Content-Transfer-Encoding: binary"); 
    

echo $data; 
} 

}


  
    
    



?> 

