<?php
require "Dinheiros.php";
require "CotacaoDoDollar.php";

$moedaEmQueQuerConverter = new Dinheiros(5, "dollar");
$cotacaoDoDia = new CotacaoDoDollar(4.13, $moedaEmQueQuerConverter);

echo $cotacaoDoDia->converter();




 ?>
