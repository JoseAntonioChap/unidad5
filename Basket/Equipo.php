<?php
class Equipo{
private $jugadores= array();

function __construct(){

}


function addJug ($jugador){
  if($jugador instanceof Jugador){
  $this->jugadores[]= $jugador;
}
}
function getJug($numero){

}


  function getTotal(){
    $total=0;
    foreach ($this->jugadores as $key=> $value) {
      $total+=$value->getPtos();

    }return $total;
  }
}
?>
