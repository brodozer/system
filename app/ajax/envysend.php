<?php

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);

$url = 'https://dnk.dnkcrm.ru/crm/api/v1/lead/set/?api_key=328622769f5187bb7920b0dbae8527bce3b4a794';

$request = (object) [
	'request' => (object)[

	    'method' => 'create',
	    'timezone' => 'UTC+03:00',
	    'values' => (object)[
		    'name' => 'Не указан',
		    'phone' => 'Не указан',
		    'email' => 'Не указан'

	    ]
	]

];

if(strlen($name)>0){
 	$request->request->values->name = $name;
}

if(strlen($phone)>0){
 	$request->request->values->phone = $phone;
}

if(strlen($email)>0){
 	$request->request->values->email = $email;
}

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($request));
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
echo $response;

?>