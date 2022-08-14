<?php

// api sdk stripe 

$ch = curl_init();

$api_key = "sk_test_UunisdCPG8QupbZfvYHF9da3";

$data = [
    "name" => "Ahmed",
    "email" => "ahmed@gmail.com"
];

require __DIR__ . "/vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;

/*
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS => http_build_query($data)
   
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response, "\n";
*/