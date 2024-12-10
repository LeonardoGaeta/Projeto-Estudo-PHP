<?php

include __DIR__ . '/styles.php';
// include adiciona arquivos externos
// __DIR__ grava o caminho absoluto

echo '<h1>Funções Arrays</h1>';
echo '<hr>';

$array = [
    'Banana',
    'Maçã',
    'Abacate',
    'Abacaxi',
    'Melão'
];

$arrayAssociativo = [
    'nome' => 'Wendell chega',
    'idade' => 25,
    'endereco' => null
];
// Array associativo dá um nome ao índice

echo '<br>';
echo '<h2>Count</h2>';
echo '<pre>'; print_r(count($array)); echo '</pre>';
// Count retorna o tamanho do array.

echo '<hr>';

echo '<br>';
echo '<h2>Array Keys</h2>';
echo '<pre>'; print_r(array_keys($array)); echo '</pre>';
echo '<pre>'; print_r(array_keys($arrayAssociativo)); echo '</pre>';
// array keys retorna os índices.

echo '<hr>';

echo '<br>';
echo '<h2>Array Values</h2>';
echo '<pre>'; print_r(array_values($array)); echo '</pre>';
echo '<pre>'; print_r(array_values($arrayAssociativo)); echo '</pre>';
// array values retorna os valores.

echo '<hr>';

echo '<br>';
echo '<h2>In Array</h2>';
echo '<pre>'; print_r(in_array('Banana', $array)); echo '</pre>';
echo '<pre>'; print_r(in_array('25', $arrayAssociativo, true)); echo '</pre>';

// in array verifica se existe, ele retorna um valor booleano, no caso de existência, retorna 1.
// true ele faz uma comparação completa, mesmo digito e tipo, sem nada é uma comparação frouxa, se for mesmo digito, retorna verdadeiro, independente se é string ou inteiro por exemplo, é tipo ===, ele transforma esse in array em uma verificação que verifica se ele for estritamente igual.
// Caso der false, no caso, não encontre nada, ele não escreve nada na tela.

echo '<hr>';

echo '<br>';
echo '<h2>Array Search</h2>';
echo '<pre>'; print_r(array_search('Banana', $array)); echo '</pre>';
echo '<pre>'; print_r(array_search('25', $arrayAssociativo, true)); echo '</pre>';
echo '<pre>'; print_r(array_search('25', $arrayAssociativo)); echo '</pre>';

// array search ele é tipo o in array, com o diferencial que ele vai retornar o índice do valor que está buscando, caso não exista, ele retorna falso.
// verifica se existe. Se existe retorna o índice do que busca, se não existe retorna falso
// Se não existir, não irá retornar nada.

echo '<hr>';

echo '<br>';
echo '<h2>Var Dump</h2>';
echo '<pre>'; var_dump($array); echo '</pre>';
echo '<pre>'; var_dump($arrayAssociativo); echo '</pre>';
echo '<pre>'; var_dump($arrayAssociativo[2]); echo '</pre>';
echo '<pre>'; var_dump($arrayAssociativo[6]); echo '</pre>';
echo '<pre>'; var_dump($arrayAssociativo['Banana']); echo '</pre>';
echo '<pre>'; var_dump($arrayAssociativo['AAAAAA']); echo '</pre>';

echo '<hr>';

echo '<br>';
echo '<h2>Isset</h2>';
echo '<pre>'; var_dump(isset($array[0])); echo '</pre>';
echo '<pre>'; var_dump(isset($array)); echo '</pre>';
echo '<pre>'; var_dump(isset($arrayAssociativo['Banana'])); echo '</pre>';
echo '<pre>'; print_r(isset($array)); echo '</pre>';
// A diferença de var dump para print r é que o var dump retorna todas as informações sobre aquela variável, retorna todas as informações, o print r retorna só o básico, ele retorna só o essencial.

?>