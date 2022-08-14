<?php

// get data 

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/14aa16a6cece854f4b58ef50be0e80a1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "mahmoudtrageh"
]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

/*
foreach ($data as $gist) {

    echo $gist['id'], " - ", $gist['description'], "\n";

}
*/



