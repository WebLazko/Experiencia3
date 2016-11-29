<!DOCTYPE html>
<html>


<?php
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}
$directorio = 'C:/wamp/www/fe2/Experiencia3/';

$unidad = isset($_POST['unidad']) ? (int) $_POST['unidad'] : 0;
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$despacho =  isset($_POST['despacho']) ? Filtro($_POST['despacho']) : '';
$error = '';
?>

<?php
if($unidad > 2){
	echo "ta malo";
}	
?>

<h3>¡Formulario enviado satisfactoriamente!</h3>
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Bienvenido(a) <b><?php echo $unidad; ?></b>,</p>

</html>
