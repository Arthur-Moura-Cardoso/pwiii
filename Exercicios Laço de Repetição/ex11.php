<?php
do {
    echo "Digite um valor: ";
    $valor = (int)fgets(STDIN);  
} 
while ($valor <= 0);  

for ($i = 1; $i <= $valor; $i++) {
    echo $i . "\n"; 
}
?>
