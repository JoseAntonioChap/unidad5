<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Último php</title>
</head>
<body>
<?php
class dado{
	private  $minNumDado=0;
	private $maxNumDado=12;
    public function getMinNumDado()
    {
        return $this->minNumDado;
    }
    public function setMinNumDado($minNumDado)
    {
        $this->minNumDado = $minNumDado;
    }
    public function getMaxNumDado()
    {
        return $this->maxNumDado;
    }
    public function setMaxNumDado($maxNumDado)
    {
        $this->maxNumDado = $maxNumDado;


    }
public function tirarDado(){
$resultado = rand($this->minNumDado, $this->maxNumDado);
echo $resultado;
}
}


$dados = new dado();

 $dados->tirarDado();


 ?>
</body>
</html>
