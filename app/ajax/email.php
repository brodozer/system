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

	$message = "";

	if(strlen($name)>0){
		$message .= "Имя: $name\n";
	}

	if(strlen($phone)>0){
		$message .= "Телефон: $phone\n";
	}

	if(strlen($email)>0){
		$message .= "Email: $email\n";
	}

	if(strlen($date)>0 || strlen($time)>0){
		$message .= "Когда позвонить: $date $time\n";
	}

	if(strlen($text)>0){
		$message .= "Вопрос или комментарий: $text\n";
	}
	if(strlen($ref)>0){
		$message .= "URL отправки: $ref\n";
	}



	$subject = 'Заявка c dnk.bz';	

	$headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
	$headers.= "MIME-Version: 1.0" . "\r\n";
	$headers.= "Content-type: text/plain; charset=utf-8\r\n";

	$to = "request@dnk.bz";

	mail($to,$subject,$message,$headers);
?>