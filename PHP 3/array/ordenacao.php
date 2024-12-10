<?php

include __DIR__ . '/styles.php';

echo '<h1>Ordenação</h1>';

$array = [
    'Hollow Knight',
    'Watchdogs',
    'Super Mario Kart',
    'The Witcher',
    'Mortal Kombat',
    'Battlefield'
];

echo '<h2>Asort</h2>';
echo '<pre>'; print_r($array); echo '</pre>';
asort($array);
echo '<pre>'; print_r($array); echo '</pre>';
// Asort organiza em ordem crescente ou alfabética e conserva o índice do mesmo.

echo '<h2>Arsort</h2>';
echo '<pre>'; print_r($array); echo '</pre>';
arsort($array);
echo '<pre>'; print_r($array); echo '</pre>';
// Arsort organiza em ordem decrescente ou alfabética ao contrário e conserva o índice do mesmo.

echo '<h2>Sort</h2>';
echo '<pre>'; print_r($array); echo '</pre>';
sort($array);
echo '<pre>'; print_r($array); echo '</pre>';
// Sort organiza em ordem crescente ou alfabética, porém não conserva o índice


echo '<hr>';


$arrayAssociativo = [
    'nome' => 'Zinho Binho',
    'endereco' => 'Rua 11 de agosto, 321',
    'idade' => 31,
];

echo '<h2>Ksort - Array Associativo</h2>';
echo '<pre>'; print_r($arrayAssociativo); echo '</pre>';
ksort($arrayAssociativo);
echo '<pre>'; print_r($arrayAssociativo); echo '</pre>';
// Ordena pelos índices em ordem crescente. Puxam o valor junto.

echo '<h2>Krsort - Array Associativo</h2>';
echo '<pre>'; print_r($arrayAssociativo); echo '</pre>';
krsort($arrayAssociativo);
echo '<pre>'; print_r($arrayAssociativo); echo '</pre>';
// Ordena pelos índices em ordem decrescente. Puxam o valor junto.


// Todos acima é organizado por posição.
echo '<hr>';


$arrayCoisa = [
    '10.0v',
    '1.0v',
    '2.0v',
];

echo '<h2>Natsort</h2>';
echo '<pre>'; print_r($arrayCoisa); echo '</pre>';
natsort($arrayCoisa);
echo '<pre>'; print_r($arrayCoisa); echo '</pre>';
// Organiza pelos números, ignorando a letra. Ele organiza por digito.

?>