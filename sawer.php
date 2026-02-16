<?php
header("Content-Type: application/json");

$streamKey = "4943e1622f24aa9f46427a12c027f3b0";

$url = "https://saweria.co/api/overlay/recent?streamKey=".$streamKey;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: RobloxProxy"
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
