<?php
// Q1. Crie uma variável em PHP, atribua um valor e exiba na página.
echo "\n";
$mens = "Olá, pedro";
echo $mens;

echo "<br>";



// Q2. Exiba na tela as variáveis nome, idade, endereco e curso fazendo a concatenação dos valores dentro do seguinte texto.

echo "\n";
$nome = "pedro";
$idade = "30";
$endereco = "São Luís";
$curso = "senac";

echo "Ola eu sou " . $nome . ", tenho " . $idade . " anos, moro em " . $endereco . " e faço o
curso de programador web no " . $curso;
echo "<br>";

// Q3. Faça um programa que leia 2 variáveis e exiba na tela: soma, subtração, multiplicação e divisão.

$num1 = 5;
$num2 = 3;

$resul = $num1 * $num2;

echo $resul;
echo "<br>";


//Q4. Faça um programa que leia 2 números e exiba quem é maior, menor ou se eles são iguais.

$val1 = 113;
$val2 = 13;

if($val1 > $val2) {
    echo "$val1 é maior que $val2";
}elseif($val1 < $val2) {
    echo "$val1 é menor que $val2";  
} else {
    echo "$val1 e $val2 são iguais";
}

//Q5. Faça um programa que leia uma string e verifique se ela contém as letras ‘a’ e ‘o’. Caso sim escreva “Contem”, caso contrário escreva “Nao Contem”.

//Q6 .

function somar($n1,$n2)
{
    return $n1 + $n2;
}

$resul = somar(2,1);
echo "$resul";

?>