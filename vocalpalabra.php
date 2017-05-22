<html> 
<head> 
</head> 
<body>
<h2>Entrar una frase ye un combobox selecionar vocales y consonantes_______________________</h2>
<?php 
$frase="";
if( isset($_POST['operacion']))
{ if ($_POST['operacion']=="vocal") 
{ 
$frase=$_POST['valor1'] ;
$vocales = ['a', 'e', 'i', 'o', 'u'];
contar($vocales,$frase);
}
else 
{ 
if ($_POST['operacion']=="consonante") 
{ 
$frase=$_POST['valor1'] ; 
$consonante = ['b', 'c', 'd', 'f', 'g', 'h', 'j','k','l','m','n','p','q','r','s','t','v','w','x','y', 'z'];
}
contar($consonante,$frase);
} 
}
function contar ( $cadena, $frase)
{
$msg ="";
for($i = 0; $i < count($cadena); $i++) {
$msg = $msg . 'La letra ' . $cadena[$i] . ' aparece ' . substr_count($frase, $cadena[$i]) . ' veces.<br/>'; /*busca una letra*/

}
echo $msg;
echo "Las consonantes:".$frase;

/*contamos las palabras*/
for ($a=0;$a<count($cadena);$a++){
      $cadena = $_POST['valor1'] ;
      $frase = count(explode(" ", $cadena));
        echo "<br> En total hay $frase palabras";
}
}

 
?>
<form action="vocalpalabra.php" method="post"> 
<br>
Ingrese la frase:

<input type="text" name="valor1" value =" <?php echo $frase ?>";> 
<br>

<select name="operacion"> 
<option value="vocal">contar vocal</option> 
<option value="consonante">contar consonante</option> 
</select> 
<br> 
<input type="submit" name="operar"> 
</form>
</body> 
</html>
