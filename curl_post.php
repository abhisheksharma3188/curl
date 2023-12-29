<?php
// URL to send the POST request to
$url = 'http://localhost/curl/restapi.php';

// Data to be sent in the POST request (as an associative array)
$postData = array(
    'name' => 'Abhishek',
    'surname' => 'Sharma',
);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1); // Set request type to POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData); // Set the POST data

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the response as needed
echo $response.'<br>';
$response_json=json_decode($response,true);
var_dump($response_json);
echo '<br>';
echo $response_json['your_name'].'<br>';
echo $response_json['your_surname'].'<br>';
?>
