<?php 

defined('ABSPATH') || exit;
ini_set('memory_limit', '1');
ini_set('max_execution_time', '-1');
ini_set('display_errors', 1);

require __DIR__ . 'vendor/autoload.php';

//insert into google sheet code
$client = new \Google_Client();
$client->setApplicationName('prosarmoste');
$client->setScopes([Google\Service\Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service    = new Google\Service\Sheets($client);



?>