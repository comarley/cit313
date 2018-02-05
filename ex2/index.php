<?php
include '_includes/config.php';
include ABSOLUTE_PATH . '/_includes/header.inc.php';
include_once("classes/user.class.php");
include_once("classes/user1.class.php");
include_once("classes/user2.class.php");
?>

<?php
$regular = new user1('Regular User','spennytyler' );
$admin = new user2('Admin', 'marleyconor');

$regular->first_name= 'Tyler';
$regular->last_name= 'Spenny';
$regular->email_address ='spennytyler@gmail.com';

$admin->first_name= 'Conor';
$admin->last_name= 'Marley';
$admin->email_address ='marleyconorr@gmail.com';


echo $regular->user_level . "<br/>";
echo $regular->user_type . "<br/>";
echo $regular->first_name . "<br/>";
echo $regular->last_name . "<br/>";
echo $regular->email_address . "<br/>";

echo $admin->user_level . "<br/>";
echo $admin->user_type . "<br/>";
echo $admin->first_name . "<br/>";
echo $admin->last_name . "<br/>";
echo $admin->email_address . "<br/>";
?>


<?php
include ABSOLUTE_PATH . '/_includes/footer.inc.php';
?>
