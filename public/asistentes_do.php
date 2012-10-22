<?php
/**
 * Procesa el archivo de asistentes, generando un json para
 * mostrar en /asistentes
 */

//----------- Archivo CSV
$archivo_csv_eventioz = "../tmp/meetupuy.csv";
if(!is_file($archivo_csv_eventioz)){
    die("ups no accedo al archivo");
}

//----------- Base de datos
require_once 'include/sqlite_asistentes.inc.php';

//----------- Conexion a Twitter
require_once '../library/twitter.class.php';

if(!is_readable('../config/twitter.conf.php')){
    die('Por favor configurar Twitter, copiar ../config/twitter.conf.ori.php en ../config/twitter.conf.php y cambiar los valores');
}
require_once '../config/twitter.conf.php';

$twitter = new Twitter;
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//----------- Comienzo procesamiento

$readcsv = fopen($archivo_csv_eventioz, 'r');
$registros_asistentes_nuevos = array();
$registros_asistentes_viejos = array();
$i = 1;
while ($line = fgetcsv($readcsv,0,';')) {
    //Me tengo que saltar el primer registro
    if($i==1){
        $i=2;
        continue;
    }
    /**
     * 3  - Nombre
     * 2  - Apellido
     * 4  - Email
     * 14 - Twitter
     */
    //print_r($line);

    /**
     * TODO: hopearse la primer linea que es la que tiene los datos
     *       No procesar registros repetidos.
     */

    $registro_asistente = array(
        'nombre' => trim($line[3].' '.$line[2]),
        'twitter_handle' => trim($line[14]),
        'avatar_url' => '',
    );

    // Existe el registro?
    $sql = "SELECT * FROM asistentes WHERE email = '".trim($line[4])."';";
    $mail = trim($line[4]);
    $reg = $asistentesTbl->fetchRow("email = '".$mail."'");

    if($reg){
         $registros_asistentes_viejos[] = $reg->toArray();
    } else {
        //Es nuevo!!!
        $nuevo_registro = $asistentesTbl->fetchNew();
        $nuevo_registro->nombre = trim($line[3].' '.$line[2]);
        $nuevo_registro->twitter_handle = trim($line[14]);
        $nuevo_registro->email = trim($line[4]);
        //traigo data de twitter.
        if($line[14] != '' && strtolower($line[14])!="twitter"){
            $results = $twitter->request('users/show', array('screen_name'=>$line[14]), 'GET');
            $avatar_url = $results->profile_image_url;
        } else {
            $avatar_url = '/img/asistente_default.jpg';
        }

        $nuevo_registro->avatar_url = $avatar_url;
        try{
            $nuevo_registro->save();
            $registros_asistentes_nuevos[] = $nuevo_registro->toArray();
        } catch (Exception $e){
            echo $mail;
            echo $e->getMessage();
            die('-');
        }

    }


} // While
fclose($readcsv);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once 'include/head_meta.inc.php'; ?>
  </head>

  <body>

    <?php require_once 'include/navbar.inc.php'; ?>

	<div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>¿Vos vas? ellos si:</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">
          <div class="row">
              <div class="span12">
                  <h2>Agregados a la BD</h2>
                  <pre>
                    <?php print_r($registros_asistentes_nuevos); ?>
                  </pre>
              </div>
          </div>
          <div class="row">
              <div class="span12">
                  <h2>Existentes</h2>
                  <pre>
                    <?php print_r($registros_asistentes_viejos); ?>
                  </pre>
              </div>
          </div>
      </div>
    </div>
  </body>
</html>
