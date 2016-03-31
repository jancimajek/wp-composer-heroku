<?php

//phpinfo();
//
//error_log('JANCI TEST ERROR');
//
//exit;

$url = getenv('JAWSDB_URL');
$url = 'mysql://fzmiugly2tw3fju8:jy5c8e1ywe7qkki5@ivgz2rnl5rh7sphb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/xcbtduk46ixj8iyj';

$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = @mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
	echo "Connection failed: " . mysqli_connect_error();
} else
{
	echo "Connection was successfully established! <hr />";
}

echo 'h:' . $hostname . '<br />';
echo 'u:' . $username . '<br />';
echo 'p:' . $password . '<br />';
echo 'd:' . $database . '<br />';$url = getenv('JAWSDB_URL');
$url = 'mysql://fzmiugly2tw3fju8:jy5c8e1ywe7qkki5@ivgz2rnl5rh7sphb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/xcbtduk46ixj8iyj';

$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = @mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
	echo "Connection failed: " . mysqli_connect_error();
} else
{
	echo "Connection was successfully established! <hr />";
}

echo 'h:' . $hostname . '<br />';
echo 'u:' . $username . '<br />';
echo 'p:' . $password . '<br />';
echo 'd:' . $database . '<br />';