
<?php include_once 'header.php'; ?>


<?php

foreach ($_REQUEST as $__opt => $__val){
	$$__opt = $__val;
}

if(empty($pg)){
	include("nav/home.php");
}
elseif(substr($pg, 0, 4) == 'http' or substr($pg, 0, 1) == "/" or substr($pg, 0, 1) == "."){
	echo '<br>Página não exsite!</br>';
}
else{
	include ("nav/$pg.php");
}

?>


<?php include_once 'footer.php'; ?>

       	  