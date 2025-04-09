<?php
echo "Digite um valor: ";
$valor = (int)fgets(STDIN);  

for ($i = 1; $i <= $valor; $i++) {
    echo $i . "\n"; 
}
?>
