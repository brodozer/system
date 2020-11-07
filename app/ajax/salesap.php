<?php
	$name ='';
	if(isset($_POST['name'])){
		$name = htmlspecialchars($_POST['name']);
	}
	$phone ='';
	if(isset($_POST['phone'])){
		$phone = htmlspecialchars($_POST['phone']);
	}
	$email ='';
	if(isset($_POST['email'])){
		$email = htmlspecialchars($_POST['email']);
	}
	$date ='';
	if(isset($_POST['date'])){
		$date = htmlspecialchars($_POST['date']);
	}
	$time ='';
	if(isset($_POST['time'])){
		$time = htmlspecialchars($_POST['time']);
	}
	$text ='';
	if(isset($_POST['text'])){
		$text = htmlspecialchars($_POST['text']);
	}
	$ref ='';
	if(isset($_POST['ref'])){
		$ref = htmlspecialchars($_POST['ref']);
	}

	$funn = 5901;
	//$funn = 11620;
	
	$resp = 31289;
	//$resp = 12685;

	$contact = array(
	  'data' => array(
	    'type' => 'contacts',
	    'attributes' => array(
	      'first-name' => 'Не указано',
	      'last-name' => 'Не указано',
	      'general-phone' => 'Не указан'
	    ),
	    'relationships' => array(

	      'responsible' => array(
	        'data' => array(
	          'type' => 'users',
	          'id' => $resp
	        )
	      )
	    )
	  )
	);


	if(strlen($name)>0){
		$contact['data']['attributes']['first-name'] = $name;
	}

	if(strlen($phone)>0){
		$contact['data']['attributes']['general-phone'] = $phone;
	}

	if(strlen($email)>0){
		$contact['data']['attributes']['email'] = $email;
	}


	$message = '';
	if(strlen($date)>0 || strlen($time)>0){
		$message .= "Когда позвонить: $date $time\n";
	}

	if(strlen($text)>0){
		$message .= "Вопрос или комментарий: $text\n";
	}
	if(strlen($ref)>0){
		$message .= "URL отправки: $ref\n";
	}


	if(strlen($message)>0){
		$contact['data']['attributes']['description'] = $message;
	}

#
# скрипт создает контакт, привязывает его к компании и указывает источник
# пропишите свой token в константу SALESAP_TOKEN.





define("SALESAP_TOKEN", "zlOhNkAF5L3MA9IM_xkHQP4Cm8Q_IOoDBgDqJobtJCg");

function sendToSalesap($entityType, $data) {
  $curl = curl_init();
  $url = "https://app.salesap.ru/api/v1/$entityType";

  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/vnd.api+json','Authorization: Bearer '.SALESAP_TOKEN));
  curl_setopt($curl, CURLOPT_HEADER, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

  $out = curl_exec($curl);
  $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $response = json_decode($out, true);

  return $response;
}





	$responseContact = sendToSalesap('contacts', $contact);


	$deal = array(
	  'data' => array(
	    'type' => 'deals',
	    'attributes' => array(
	      'name' => 'Сделка по API'
	    ),
	    'relationships' => array(

	      'contact' => array(
	        'data' => array(
	          'type' => 'contacts',
	          'id' => $responseContact['data']['id']
	        )
	      ),
	      'responsible' => array(
	        'data' => array(
	          'type' => 'users',
	          'id' => $resp
	        )
	      ),
	      'stage' => array(
	        'data' => array(
	          'type' => 'deal-stages',
	          'id' => 38450
	        )
	      ),
	      'stage-category' => array(
	        'data' => array(
	          'type' => 'deal-stage-categories',
	          'id' => $funn
	        )
	      )
	    )
	  )
	);

	$responseDeal = sendToSalesap('deals', $deal);
?>