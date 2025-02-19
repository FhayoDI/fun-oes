<?php
do{
    menu();
} while(true);
function menu() {
    echo "===========================================================================================
Menu Poggers!!
Digite o número do menu que deseja:
1 - Ver se é multiplo de 4
2 - Saber se é par ou impar
3 - Soma dos Números do intervalo
4 - Somar números b e c divisiveis por a
5 - Saber seu peso ideal baseado no sexo
===========================================================================================\n";
    $choice = readline("insira o numero do menu: ");
    switch ($choice) {
        case 1:
            multiplo4();
            break;
        case 2:
            par();
            break;
        case 3:
            doisint();
            break;
        case 4:
            tresint();
            break;
        case 5:
            alturasexo();

    }

}
function multiplo4()
{
    $num = (int)readline("Digite um numero: \n");
    if ($num % 4 === 0) {
        echo "true \n";
    } else {
        echo "false \n ";
    }
    $menu = readline("Deseja voltar ao menu? (S/N)");
    if ($menu === "N") {
        multiplo4();
    }
}
function par() {
    $num = (Int)readline("Digite um numero: \n");
    if ($num %2 === 0) {
        echo "true- par \n";
    } else {
        echo "false- impar \n";
    }
    echo "\n";
    $menu = readline("Deseja voltar ao menu? (S/N)");
    if ($menu === "N") {
        par();
    }
}
function doisint() {
    $numum = readline("Digite um numero:");
    $numdois = readline("Digite outro numero:");
    $acu = 0;
    for ($i=$numum; $i <= $numdois; $i++){
    $acu += $i;
    }
    echo "$acu \n ";
    $menu = readline("Deseja voltar ao menu? (S/N)");
    if ($menu === "N") {
        doisint();
    }
}
function tresint()
{  $a =readline("insira um numero maior que 1");
   $b =readline();
   $c =readline();
   $soma = 0;
   if ($a < 1) {
       echo "O número deve ser maior que 1 \n";
   }
    for ($i=$b; $i <=$c; $i++){
        echo "a";
        if ($i % $a ===0) {
            $soma += $i +$i;
            echo $soma;
        }
    }
    $menu = readline("Deseja voltar ao menu? (S/N)");
    if ($menu === "N") {
        tresint();
    }
}

function alturasexo(){
    $altura = readline("Digite sua altura:");
    $sexo = readline("Digite seu sexo: M para masculino F para feminino");
    switch ($sexo) {
        case 'M':
            $resultado = 72.7 * $altura - 58;
        echo "O seu peso ideal masculino é $resultado \n";
        case 'F':
            $resultado = 62.1 * $altura - 44.7;
            echo $resultado;
    }
    $menu = readline("Deseja voltar ao menu? (S/N)");
    if ($menu === "N") {
        alturasexo();
    }

}