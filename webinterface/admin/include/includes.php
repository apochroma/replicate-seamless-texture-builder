<?php session_start();
date_default_timezone_set('Europe/Zurich'); 
/*Defining Variables and Arrays*/
#define('DOCROOT', $_SERVER['HTTP_HOST']."/kunden/studiokino/");
define('DOCROOT', $_SERVER['HTTP_HOST']."/");
setlocale(LC_ALL, "de_CH");


function connect_to_db()
{
	require_once ( (dirname(__FILE__)) . '/../include/php-activerecord/ActiveRecord.php');
	
	$connections=array(
	'development' => 'mysql://aigenerator:5_Je8cx69@bildstrecke.ch/apochro_bildstrecke?charset=utf8');
	#'production' => 'mysql://japolisander:sZmy9ROSDf1SKSW@studiokino.ch/apochro_filmdatenbank?charset=utf8');
	
	ActiveRecord\Config::initialize(function($cfg) use ($connections)
	{
		$cfg->set_model_directory( (dirname(__FILE__)) . '/../include/models');
		$cfg->set_connections($connections);
		$cfg->set_default_connection('development');
		#$cfg->set_default_connection('production');
	});
}

function printHeader() {
echo "<!DOCTYPE html>
<html lang='en'>
<head>
<title>AI Generator for seamless textures</title>
<link rel='stylesheet' href='css/main.css'>
<meta charset='UTF-8'>
</head>

<body>
<h1>Admin</h1>
<p>Tonight I swapped some of the songs I wrote with some friends, who
gave me some of the songs they wrote. I love sharing my music.</p>
";
}

function printFooter() {
echo "</body>
</html>";
}

?>
