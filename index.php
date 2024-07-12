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

$x = 4;
$y = 5;

echo "a soma de $x e $y é: " . $x + $y;
echo "<br>";
echo "a subtração de $x e $y é: " . $x - $y;
echo "<br>";
echo "a multiplicação de $x e $y é: " . $x * $y;
echo "<br>";
echo "a divisão de $x e $y é: " . $x / $y;
echo "<br>";

echo "<br>";


//Q4. Faça um programa que leia 2 números e exiba quem é maior, menor ou se eles são iguais.

$val1 = 113;
$val2 = 11;


if($val1 > $val2) {
    echo "$val1 é maior que $val2";
}elseif($val1 < $val2) {
    echo "$val1 é menor que $val2";  
} else {
    echo "$val1 . $val2 são iguais";
}
echo "<br>";

//Q5. Faça um programa que leia uma string e verifique se ela contém as letras ‘a’ e ‘o’. Caso sim escreva “Contem”, caso contrário escreva “Nao Contem”.

function verificaLetras($texto)
{
    if (str_contains($texto, 'a') && str_contains($texto, 'o')) {
        echo "Contem";
        echo "<br>";
    } else {
        echo "Não Contem";
        echo "<br>";
    }
}

verificaLetras("qualquer");
echo "<br>";


//Q6 . Crie uma função que retorna o próprio argumento enviado para ela. Faça o chamado dessa função exibindo na tela o resultado.

function ret_argumento($arg){
    return $arg;
}

$resul = ret_argumento("Olá,programador");
echo "$resul";

echo "<br>";
//Q7. Crie uma função de verificação de senha. Ela deve retornar true para senhas válidas e false para senhas inválidas.

function verificaSenha($senha)
{
    $temMinuscula = false;
    $temMaiuscula = false;
    $temNumero = false;
    $senha = str_split($senha);
    // 4sdfGhjk
    

    if (count($senha) < 8) {
        echo "Menor que 8 caracteres <br>";
        return false;
    }

    foreach ($senha as $caractere) {// [4,s,d,f,G,h,j,k]
        if (ctype_upper($caractere)) {
            $temMaiuscula = true;
        }

        if (ctype_lower($caractere)) {
            $temMinuscula = true;
        }

        if (ctype_digit($caractere)) {
            $temNumero = true;
        }
    }

    if ($temMaiuscula && $temMinuscula && $temNumero) {
        return true;
    }
}

if (verificaSenha('4sdfGhjk')) {
    echo "Valida <br>";
} else {
    echo "Invalida <br>";
}

//q8. Usando o operador ternário faça uma questão que leia uma idade e indique se é maior de idade ou não.
echo ($idade >= 18) ? "Maior de Idade <br>" : "Menor de Idade <br>";

//q9. Percorra o array abaixo e exiba o nome e a nota dos aprovados (nota maior ou igual
$alunos = array(
    'Junior' => 9.5,
    'Maria' => 10,
    'Paulo' => 6,
    'Ana' => 8.5,
    'Pedro' => 5.5,
    'Julia' => 6.5
);

foreach($alunos as $aluno=>$nota){
    if($nota >= 7){
        echo "$aluno <br>";
    }
}

//q10. Crie uma função que calcule a área de um círculo. Fórmula: a = pi * raio2. Valor teste raio = 4, área ~ 50.27
function areaCirculo($raio){
    return pi() * ($raio * $raio);
}

echo round(areaCirculo(4), 2);
echo "<br>";

//q11. Crie uma função que receba um número como parâmetro e retorna um array de todos os números pares de 0 até o número enviado. Chame a função, depois, percorra e exiba os valores do array resultante.
// a. Exemplo:
function geraArray($termo){
    $arrayPares = array();
    for($i = 0; $i <= $termo; $i++){
        if($i % 2 == 0){
            array_push($arrayPares, $i);
        }
    }
    return $arrayPares;
}

echo "<pre>";
var_dump(geraArray(10));
echo "</pre>";

//q12. Crie uma função que recebe um ano como parâmetro e devolve a qual século ele pertence. A contagem de século é do ano 1 ao ano 100, ou seja, 1901-2000 é século 20 e 2001-2100 é século 21.
//a. exemplo
// i. entrada: 1950 // saída: século 20;
// ii. entrada: 2005 // saída: século 21;
// iii. entrada: 1900 // saída: século 19;
function seculo($ano){
    return ceil($ano/100);
}

echo "1950 é do século: " . seculo(1950) . "<br>"; // 1950/100 = 19.5 arredonda pra cima 20
echo "2005 é do século: " . seculo(2005) . "<br>"; // 2005/100 = 20.05 arredonda pra cima 21
echo "1900 é do século: " . seculo(1900) . "<br>"; // 1900/100 = 19 nao precisa arredondar

//q13. Crie uma função que recebe uma string e verifica se ela é ou não um Palíndromo. Palíndromos são palavras que se pode ler, indiferentemente, da esquerda para a direita ou vice-versa. Exemplo: arara.
function palindromo($p){
    if($p == strrev($p)){
        echo "Palindromo <br>";
    } else {
        echo "Não é Palindromo <br>";
    }
}

palindromo('arara');
palindromo('senac');
palindromo('ana');
?>