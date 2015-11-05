<?php

/* read files from google drive
*
* El primer bloque es necesario para autenticarse en drive
*   Campo redirect_uri necesario ser el que va a leer en drive
*/
session_start();

require 'vendor/autoload.php';
/************************************************
  ATTENTION: Fill in these values! Make sure
  the redirect URI is to this page, e.g:
  http://localhost:8080/fileupload.php
 ************************************************/
$client_id = '640000645988-9a4eqtcbdun80uqgdbekmprrdq8736bb.apps.googleusercontent.com';
$client_secret = '8VecpzSLkJXrFe87dvPazJGb';
//$redirect_uri = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],
   // FILTER_SANITIZE_URL);
/*
* Redirección a la aplicación después de dar permisos
*/
$redirect_uri = 'http://localhost/workspace/php/tests/6-GoogleDrive/start.php';
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
// https://developers.google.com/drive/web/scopes
$client->addScope("https://www.googleapis.com/auth/drive");
$service = new Google_Service_Drive($client);
// http://.../readfile.php?logout
if (isset($_REQUEST['logout'])) {
  unset($_SESSION['upload_token']);
}
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['upload_token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['upload_token']) && $_SESSION['upload_token']) {
  $client->setAccessToken($_SESSION['upload_token']);
  if ($client->isAccessTokenExpired()) {
    unset($_SESSION['upload_token']);
  }
} else {
  $authUrl = $client->createAuthUrl();
  //echo $authUrl;
  echo "<a href=$authUrl>ask permission</a>";
}
/*
*
* De aquí en adelante lo que se quiera hacer en drive
*/
//Cliente creado anteriormente
//$client = getClient();
$service = new Google_Service_Drive($client);

// Print the names for up to 100 files.
$optParams = array(
  'maxResults' => 100,
);
$results = $service->files->listFiles($optParams);

if (count($results->getItems()) == 0) {
  print "No files found.\n";
} else {
  echo "<html><head><meta charset='UTF-8'><title>Drive files</title></head><body>";
  echo "<h1>Files:</h1>";
  foreach ($results->getItems() as $file) {
    echo "* ".$file->getTitle()/*." ".$file->getId()*/."<br/>";
  }
  echo "</body></html>";
}