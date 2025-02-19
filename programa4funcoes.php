<?php
echo "Digite:\n 1 para soma\n 2 para subtracao\n 3 para divisao\n 4 para multiplicacao\n";
$decisao = readline();
$numero1 = readline("infome o primeiro numero:");
$numero2 = readline("infome o segundo numero:");
switch ($decisao) {
    case 1:
        soma();
        break;
    case 2:
        subtracao();
        break;
    case 3;
        divisao();
        break;
    case 4;
        multiplicacao();
}
function soma()
{
    global $numero1;
    global $numero2;
    $soma = $numero1 + $numero2;
    echo $soma . "\n";
}

function subtracao()
{
    global $numero1;
    global $numero2;
    $subtacao = $numero1 - $numero2;
    echo $subtacao . "\n";
}
function divisao()
{
    global $numero1;
    global $numero2;
    if ($numero2 == 0) {
        echo "divisao por zero não existe";
        return;
    }
    $divisao = $numero1 / $numero2;
    echo $divisao . "\n";
}

function multiplicacao()
{
    global $numero1;
    global $numero2;
    $multiplicacao = $numero1 * $numero2;
    echo $multiplicacao . "\n";
}

?>