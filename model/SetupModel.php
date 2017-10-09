<?php

class SetupModel
{

  function runSetupScript($host, $dbname, $user, $pass){
    $conexion = 'mysql:host='.$host.';dbname='.$dbname.';charset=utf8';
    $db = new PDO($conexion, $user, $pass);

    $file = fopen("database.sql", "r") or die("Unable to open database.sql file!");
    $sql = fread($file,filesize("database.sql"));
    fclose($file);

    $db->exec($sql);
  }

}
