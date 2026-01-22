<?php

include "../model/bebida.php";

$bebida = new Bebida("Coca-cola", 5,"Água gaseificada, coca, etc.");

echo "<h1 style='color:red'>";
echo $bebida->vender();
echo "</h1>";

?>