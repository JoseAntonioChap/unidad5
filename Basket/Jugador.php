<?php
class Jugador{
public $numeroJug;
public $ptos;

public function __construct($numeroJug){
  $this->numeroJug=$numeroJug;
}



    public function getNumeroJug()
    {
        return $this->numeroJug;
    }


    public function getPtos()
    {
        return $this->ptos;
    }


    public function addPtos($ptos){
      $this->ptos+=$ptos;
    }


}
?>
