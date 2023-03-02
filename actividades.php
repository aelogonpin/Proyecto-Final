Escribe un programa en PHP que convierta una cantidad introducida por el usuario de pulgadas a
centímetros, esto es, pide una longitud en pulgadas y la muestra en centímetros.

<?php
$pulg=readline("Indicame las pulgadas: ");
$total = $pulg * 2.54;
print ($pulg . " pulgadas en centimetros son, " .$total. " cm");
?>


Escribe un programa en PHP que convierta una temperatura introducida por el usuario de grados
Fahrenheit a grados centígrados, esto es, pide una cantidad en grados Fahrenheit y la muestra en
centígrados.
<?php
$faren=readline("Dame los faren ");
$grados= ($faren - 32) * 5 /9;
print("Son " . $grados . " grados");
?>

Escribe un programa en PHP pida al usuario una cantidad de euros, una tasa de interés y un
número de años. Muestra por pantalla en cuanto dinero se habrá convertido el capital inicial,
transcurridos esos años si cada año se aplica la tasa de interés introducida.

<?php
$capi = readline("Dame capital inicial: ");
$inte = readline("Dame intereses: ");
$anyo = readline("Dame años: ");
$final = $capi*(1+$inte/100)**$anyo;
print("$final");
?>



Escribe un programa en PHP que le pregunte al usuario qué nota ha sacado en el examen. Si la
nota es mayor o igual que 5 le dirá "Enhorabuena, has aprobado", y si no es así dirá "Lo siento, has
suspendido."

<?php
$nota = readline("¿Cuanto has sacado en el examen? ");
if($nota >= 5){
  print ("¡Felicidades, aprobaste!");
}
else{
  print("Suspendiste, :( ");
}
?>



Escribe un programa en PHP que le pregunte al usuario un número y escriba un mensaje
indicando cuál es su valor absoluto.

<?php
$numero = readline("Dame el numero que quieras pasar a absoluto: ");
$numeroabs = abs($numero);
echo $numeroabs;
?>


Escribe un programa en PHP que le pregunte al usuario un número entero positivo y diga si es
divisible por 2, 3, 5, 7, 11, 13, 17 y/o 19.


<?php
$array=[2, 3, 5, 7, 11, 13, 17, 19];
$numero = readline("Dame un numero: ");
for($i=0;$i<8; $i++){
  if($numero % $array[$i] == 0)
    print("El numero " . $numero . " es divisible entre " . $array[$i] ); 
  echo "\n";
}
?>



Escribe un programa en PHP que le pida al usuario un número del 1 al 7 e indique en función del
número introducido, qué día de la semana es (1 = lunes, 2 = martes, etc.)

<?php
$array=[0 => "lunes", 1 => "martes", 2 => "miercoles", 3 => "jueves", 4 => "viernes"];
$dia = readline("Dime un numero del 1 al 5: ");
$total = $dia - 1;
print("El día de hoy es " .$array[$total]);
?>


Escribe un programa en PHP que pida al usuario una opción: 1 para convertir metros a pies y 2
para pies a metros; posteriormente, pida la altura en pies (opcion1) y la convierta a metros o pida la
altura en metros (opción 2) y lo convierta a pies.

<?php
$opcion = readline(" Selecciona: 1º Metros a pies  2º Pies a metros:  ");
switch ($opcion) {
    case 1:
        echo "Has elegido la opción 1";
        echo "\n";
        $resultado= readline("Indicame cuantos metros: ");
        print("Son en total " . $resultado * 3.28084 . " pies");
        break;
    case 2:
        echo "Has elegido la opción 2";
  echo "\n";
        $resultado2= readline("Indicame cuantos pies: ");
        print("Son en total " . $resultado2 * 0.3048 . " metros");
        break;
    default:
        echo "La opción seleccionada no es válida";
        break;
}
?>






Escribe un programa en PHP que imprima los 25 primeros números naturales.

<?php
for($i=0;$i<=25;$i++)
print("Numero ". $i . "\n");
?>






