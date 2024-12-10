# Atividade Validação de Dados

> Nesta atividade, você deve realizar a validação de dados dos formulários de dois exercícios.
> Cada validação deverá ser feita única e exclusivamente pelo PHP (arquivo resultado.php).
> Validações feitas no HTML não serão consideradas.
> Cada diretório contém o enunciado dos exercícios.

### Execução

- [ ] Tarefa 1: realizar a validação dos dados do Exercício 1
- [ ] Tarefa 2: realizar a validação dos dados do Exercício 2


## 💻 Pré-requisitos

> [!IMPORTANT]
> PRIMEIRO PASSO: copiar os arquivos da pasta compartilhada.

> [!TIP]
> SEGUNDO PASSO: hospedar os arquivos no WAMP Server.

## ⚠️ Atenção
  Lembre-se que a validação de dados ocorre em duas etapas:

- Validação geral do formulário
- Validação específica de campo específico

## 📖 Referências
* Os parâmetros das funções são genéricos, representam  todo e qualquer tipo de variável ou caracter
- empty($var): Determina se $var está vazia
- isset($var): Determina se $var está declarada
- is_numeric($var): Verifica se $var é um número
- ctype_digit($var): Verifica se $var é inteiro.
- filter_var($var, $filtro): Filtra uma variável com um filtro especificado
  $filtro: FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_URL, FILTER_VALIDATE_DOMAIN
- explode($separador, $string): Divide uma string em um array, com base em um caracter separador
- checkdate($mes, $day, $ano): Verifica a validade da data formada pelos argumentos. Uma data é considerada válida se o parâmetro é corretamente definido.
  $mes
  O mês entre 1 e 12.
  $dia
  O dia está dentro do número permitido de dias para o mês (month). Anos (year) bissextos são levados em consideração.
  $ano
  O ano está entre 1 e 32767, inclusive.

- foreach
  A estrutura foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objetos. Possui duas sintaxes:

  foreach ($array as $valor){
    código
  }

  foreach ($array as $chave => $valor){
    código
  }

  A primeira forma percorre o iterável dado por $array. A cada iteração, o valor do elemento atual é atribuído a $valor.

  A segunda forma vai, adicionalmente, atribuir a chave do elemento corrente a variável $chave a cada iteração.