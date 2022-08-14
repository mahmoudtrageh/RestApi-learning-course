<?php

// an example api-created repo

$ch = curl_init();

$headers = [
    "Accept: application/vnd.github.v3+json",
    "Authorization: token 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"
];

$payload = json_encode([
    "name" => "created from api",
    "description" => "an example api-created repo"
]);

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "mahmoudtrageh",
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";

