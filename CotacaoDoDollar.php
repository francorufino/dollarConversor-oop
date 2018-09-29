<?php
class CotacaoDoDollar{

private $cotacaoDoDia;
private $valorEmReaisASerConvertido;

public function __construct($valorEmReaisASerConvertidoValor, $cotacaoDoDiaCotacao){
  $this->cotacaoDoDia = $cotacaoDoDiaCotacao;
  $this->valorEmReaisASerConvertido = $valorEmReaisASerConvertidoValor;
}

public function converter(){
  return $this->valorEmReaisASerConvertido * $this->cotacaoDoDia->getValorEmReal();
}


}
 ?>
