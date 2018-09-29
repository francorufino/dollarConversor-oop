<?php

class Dinheiros{

private $valorEmReal;
private $moedaEmQueQuerConverter;

public function __construct($valorEmRealValor, $moedaEmQueQuerConverterNone){
  $this->valorEmReal = $valorEmRealValor;
  $this->moedaEmQueQuerConverter = $moedaEmQueQuerConverterNone;
}

public function getValorEmReal(){
  return $this->valorEmReal;
}
}


  ?>
