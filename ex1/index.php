<?php

include '_includes/config.php';

include ABSOLUTE_PATH . '/_includes/header.inc.php';
?>

<?php
$aboutMe = array("Conor Marley", "Forest Green", "Reservoir Dogs", "Siddhartha", "Twitter.com");

echo "<h1>" . $aboutMe[0] . "</h1>" ;

echo "<ul>";

for ($i = 1, $numAbout = count($aboutMe); $i < $numAbout; $i++){
	echo "<li>" . $aboutMe[$i] . "</li>" ;
}

echo "</ul>";

?>



<?php

include ABSOLUTE_PATH . '/_includes/footer.inc.php';

?>
