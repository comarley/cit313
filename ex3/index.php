<?php
include '_includes/config.php';
include ABSOLUTE_PATH . '/_includes/header.inc.php';
function getClasses($class){
  include_once('classes/'.$class.'.class.php');
}
spl_autoload_register('getClasses');

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

echo user1::myMath(3,9);

echo "<hr/>";
?>
<form action="success.php" class="basic-grey" method="post">

<div>
<label for="firstname" id="firstnameLabel">* First Name:</label>
<input type="text" name="firstname" id="firstname" />
</div>

<div>
<label for="lastname" id="lastnameLabel">* Last Name:</label>
<input type="text" name="lastname" id="lastname" />
</div>

<div>
<label for="email" id="emailLabel">* Email Address:</label>
<input type="text" name="email" id="email" />
</div>


<div>
<input type="submit" name="submitButton" class="button" value="Submit" />
</div>

</form>



<?php
include ABSOLUTE_PATH . '/_includes/footer.inc.php';
?>
