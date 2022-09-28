<?php
//recogemos la frase
$frase=$_POST['frase'];
echo "x : ".$frase;

//Esta es la segunda
//Establecemos dos variables una para par y otra para impar

$par="";
$impar="";

//Hacemos un for para recorrer la frase entera

for ($i=0;$i<strlen($frase);$i++){
    if ($i % 2 == 0){
        // Si es par recorrera esto y sino recorrera el else
        $par=$par.$frase{$i};
    } else {
        $impar=$impar.$frase{$i};
    }
}
// Damos la vuelta a la frase
$impar=strrev($impar);
$fraseTerminada=$par.$impar;
echo '</br>';
echo "x''->x' => ".$fraseTerminada;

//Esto es la primera 

$fraseX=$fraseTerminada;

$ultimo="";
$consecutivos="";
//Hacemos un for para ver la longitud de la frase
for ($i=0;$i<strlen($fraseX);$i++){
    //si la frase tiene cualquier vocal, apartir de ella le dara la vuelta
    if ($fraseX{$i}=='a' || $fraseX{$i}=='e' || $fraseX{$i}=='i' ||  $fraseX{$i}=='o' ||  $fraseX{$i}=='u'){
        // con el strrev se le da la vuelta a la frase
        $consecutivos=strrev($consecutivos);
        $ultimo=$ultimo.$consecutivos.$fraseX{$i};
        $consecutivos="";
    } else {
        // en el otro caso, si no es vocal entrara aqui y seguira poniendo las letras
        $consecutivos=$consecutivos.$fraseX{$i};
    }
}
// en caso de acabar con 2 consonantes esto le dara la vuelta
$consecutivos=strrev($consecutivos);
// ponemos la frase que teniamos añadiendo la variabla que tiene la frase
$fraseFinal=$ultimo.$consecutivos;
echo "<br>";
echo $fraseFinal;
