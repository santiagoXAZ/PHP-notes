<?php
/*variables
    $numero = 3;
        echo "<br>este numero es un:",$numero;
        */
/*constantes
define('curso','php');
    echo curso;
        */
/*condicionales
$numero_uno = 600;
$numero_dos = 25;
if ($numero_uno < $numero_dos) 
{
    echo "<br>el numero $numero_uno es menor que el numero $numero_dos";
    
}
elseif ($numero_uno == $numero_dos) 
{
    echo "<br>el numero $numero_uno es igual que el numero $numero_dos";
}
else {
    echo "<br>el numero $numero_uno es mayor que el numero $numero_dos";
}
       */ 
/*SWITCH CASE
$curso = "espanol";

switch ($curso) {
    case 'ingles':
        echo "martes y el viernes";
        break;

    case 'biologia':
        echo "lunes martes y miercoles";
        break;
        
        break;
    case 'matematicas':
        echo "miercoles y jueves";
        break;
        
    
    default:
        echo "no existe ese curso";
        break;
}
        */
/*ciclos WHILE
$numeros = "1";
while ($numeros <= 10) 
{
    echo $numeros;
    $numeros = $numeros + 1;
}
        */
/*ciclos DO WHILE
$numeross = 1;
do {
    echo $numeross;
    $numeross = $numeross + 1;
} while ($numero <= 30);
        */
/*ciclos FOR
$numero = 5;
    for ($numero=0; $numero <= 40; $numero++) 
    { 
        echo $numero; 
    }
        */
/*array
$dias = array('lunes<br>','martes<br>','miercoles<br>','jueves<br>','viernes<br>');
print_r($dias);
        */
/*array asociativo
$estudiantes = array('nombre' => 'victor<br>','apellido' => 'contreras<br>','edad' =>14 );
    
    echo "mi nombre es :".$estudiantes['nombre'];
    echo "mi apellido es :".$estudiantes['apellido'];
    echo "mi edad es :".$estudiantes['edad'];
        */
/*ejercicios con array
$conocidos = array('jose','maria','raul','sara','pedro','camila','david' );
    $pocision = count($amigos) -2;
        echo $amigos[$pocision];
        */
/*funciones del array
    $amigos = array('jose<br>','maria<br>','raul<br>','sara<br>',
    'pedro<br>','camila<br>','david<br>','luis<br>');

        $revez = array_reverse($amigos);
            print_r($revez);
        */
/*matrices, areglos multidimensionales
$matriz = array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15)

);
        echo $matriz[0][4];
        */
/*ciclo foreach
$futbol = array('barcelona'=>'messi','juventus'=>'cr7','tottenham'=>'kane');

    foreach ($futbol as $dato => $valor)
 {
    echo $valor.'<br>';
}
        */
/*funciones
function suma($a,$b)
 {
    return $a + $b;
}

    $resultado = suma(4,8);
        echo $resultado;
        */
/*variables scope
$edad = 22;
function estudiantes(){
    //global $edad;
    $edad = 24;
    echo $edad;
} 

estudiantes();
echo ' y ';
echo $edad;
        */
/*variables globales
$n1 = 4564566;
$n2 = 4564564;
function sumar()
{
    $GLOBALS['s'] = $GLOBALS['n1'] + $GLOBALS['n2'];
}
sumar();
echo $s;
        */








?>