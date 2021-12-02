<?php
include "Jugador.php";
include "Equipo.php";
$numeroJug=0;
$team= new Equipo;
do{

$numeroJug++;
$jugador=new Jugador($numeroJug);
$jugador->addPtos(rand(20,100));
$team->addJug($jugador);


}while($numeroJug<10);
echo "Puntos: " .$team->getTotal();



?>
