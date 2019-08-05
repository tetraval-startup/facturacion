<?php

$host = "localhost";
$usuario = "servitec_root";
$password = "garciagodos1";
$db = "servitec_ws";
//$db = "razqo_bd_razqo_prueba";

//$conn = mysql_connect($host,$usuario,$password);  
$conn = mysqli_connect($host, $usuario, $password,$db);
//mysql_select_db($db,$conn) or die('NO SE PUEDE CONECTAR A LA BD');   
//mysqli_select_db($db, $conn);
mysqli_query($conn,"SET NAMES 'utf8'");

function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}
?>