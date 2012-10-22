<?php
//----------- Base de datos
require_once 'Zend/Db/Adapter/Pdo/Sqlite.php';
require_once 'Zend/Db/Table/Abstract.php';
require_once 'Zend/Db/Table.php';
require_once 'Zend/Registry.php';
try{
    $archivo_base = "../tmp/asistentes.db";
    $db = new Zend_Db_Adapter_Pdo_Sqlite(array("dbname"=>$archivo_base));
    Zend_Db_Table_Abstract::setDefaultAdapter($db);
    $sql_create = "CREATE TABLE IF NOT EXISTS asistentes (
                    id INTEGER PRIMARY KEY,
                    nombre varchar(200) NOT NULL,
                    email varchar(255) UNIQUE NOT NULL,
                    twitter_handle varchar(200) ,
                    avatar_url varchar(200)
                  );";
    $db->query($sql_create);
    $db->getConnection()->exec($sql_create);
    $sql_index = "CREATE INDEX IF NOT EXISTS tw_handle ON asistentes (twitter_handle);";
    $db->getConnection()->exec($sql_index);
    chmod($archivo_base, 0666);

} catch (Exception $e){
    die('No puedo crear la base de datos porque: '.$e->getMessage());
}
$asistentesTbl = new Zend_Db_Table('asistentes');