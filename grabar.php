<html>
<head>
</head>
<body>
<br>Hacer un formulario para recoger  por pantalla nombre, apellidos edad , 
con dos botones ( Grabar y Sacar ).Grabar en un fichero plano(txt) todos los datos, 
en caso de que la edad sea menor 18 años grabar "es menor" en caso contrario grabar su edad.
Sacar los datos grabados.<p>
<form action="grabar.php" method='post'>
ingrese su nombre:
<input type="text" name="nombre">
<br>
ingrese sus apellidos:
<input type="text" name="apellidos">
<br>
ingrese su edad:
<input type="text" name="edad">
<br>
<input type="submit" value="Grabar" name="Grabar">
<input type="submit" value="Sacar" name="Sacar">
</form>

<?php 

if (isset($_POST["Grabar"])){
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
	
	$ar=fopen("datos.txt", "a") or 
	die ("Problemas en la creacion");
	fputs($ar, $_POST['nombre']);
	fputs($ar,"\n");
	fputs($ar, $_POST['apellidos']);
	fputs($ar,"\n");
	fputs($ar, $_POST['edad']);
	fputs($ar,"\n");
	if ($_POST['edad']<18){
	fputs	($ar, "Es menor de edad");
	}
	fclose($ar);
	echo "los datos se cargaron correctamente.";

}

if (isset($_POST["Sacar"])){
	
	$ar=fopen("datos.txt", "r") or 
	die ("No se puede abrir el archivo");
	while (!feof($ar)){
		$linea=fgets($ar);
		$lineasalto=nl2br($linea);
		echo $lineasalto;
	}
	fclose($ar);
}

?>


</body>
</html>
