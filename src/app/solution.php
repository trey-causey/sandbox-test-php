<?php

require __DIR__ . '/../../vendor/autoload.php';
include __DIR__ . '/../functions/palindrome.php';

use GuzzleHttp\Client;

$client = new Client();
//this URI will be piped into the Guzzle request
$uri = $_POST['theURL'];
if($uri != '') {
    $response = $client->request('GET', $uri);
    //response is loaded into string
    $body = $response->getBody();
    $content = $body->getContents();
    //PHP strip tags removes everything except bare text and some image metadata
    $file = strip_tags($content);
    //this calls the custom function to return the palindromes
    $answers = (new WordAlgs)->palindromeFinderWeb($file);

    echo $answers;
}











