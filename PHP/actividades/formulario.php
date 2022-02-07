<?php>
if($_REQUEST['Solicitar informacion']){
	echo $_REQUEST['nombre'];

}
else {
	echo "
	<form action ='contactar.php' method='post'>
	nombre<input name='nombre'>
	<input type='submit' name='enviar'..............>";
"
}
