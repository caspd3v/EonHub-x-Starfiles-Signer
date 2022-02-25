<?php
$p12 = htmlspecialchars($_POST['certid']);
$profile = htmlspecialchars($_POST['mpid']);
$password = htmlspecialchars($_POST['pass']);

$url = $_GET['file'];
$split = explode('/', $url);
if(count($split) != 1)
    $id = $split[4];
else
    $id = $url;

$response = json_decode(file_get_contents('https://sign.starfiles.co?ipa=' . $id .'&p12=' . $p12 . '&mobileprovision=' . $profile . '&password=' . $password), true);
if($response['status'])
    header('Location: ' . $response['url']);
else
    echo 'Signing Failed';