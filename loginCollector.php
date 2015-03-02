<?php

include_once('Usuario.php');
include_once('../config/Collector.php');

class loginCollector extends Collector
{
 function verificar_login($email,$contrasena,&$result)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario='$user' and password='$password'";
        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }   
}
?>