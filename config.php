<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = ''; //Google CLIENT ID
$clientSecret = ''; //Google CLIENT SECRET
$redirectUrl = 'https://nit-ket.000webhostapp.com/user';  //return url (url to script)
$homeUrl = 'https://nit-ket.000webhostapp.com/user';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to NIT-KET');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>