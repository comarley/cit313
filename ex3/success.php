<?php
include '_includes/config.php';
include ABSOLUTE_PATH . '/_includes/header.inc.php';
function getClasses($class){
  include_once('classes/'.$class.'.class.php');
}
spl_autoload_register('getClasses');

$finalUser = new user1('newuser','regular' );

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

$finalUser->first_name=  $firstname;
$finalUser->last_name=  $lastname;
$finalUser->email_address = $email;

if($finalUser instanceof user1){
	echo $finalUser->user_level . "<br/>";
	echo $finalUser->user_type . "<br/>";
	echo $finalUser->first_name . "<br/>";
	echo $finalUser->last_name . "<br/>";
	echo $finalUser->email_address . "<br/>";
}
else {
	echo 'There seems to be a problem.';
}

include ABSOLUTE_PATH . '/_includes/footer.inc.php';
?>
