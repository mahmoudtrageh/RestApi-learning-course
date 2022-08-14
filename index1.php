<?php

// star api repo

$ch = curl_init();

$headers = [
    "Accept: application/vnd.github.v3+json",
    "Authorization: token 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"
];


curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "mahmoudtrageh",
    CURLOPT_CUSTOMREQUEST => "PUT"
   
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";

