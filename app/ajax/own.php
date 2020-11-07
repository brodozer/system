<?php

$send_s2 = htmlspecialchars($_POST['send_s2']);




if(strlen($send_s2)>0 &&  $send_s2 == 'true'){

	require ("salesap.php");


}else{

	require ("email.php");

}

?>