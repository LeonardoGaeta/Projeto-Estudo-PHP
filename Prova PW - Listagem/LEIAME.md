# Atividade Select

> Nesta atividade, você deve realizar a listagem de valores vindos do banco de dados.


### 🖥️ Execução

## Tabela Carros

- [ ] Tarefa 1: realizar a listagem do Carro mais novo
- [ ] Tarefa 2: realizar a listagem do Carro mais antigo
- [ ] Tarefa 3: realizar a listagem da Média de Aluguel da Categoria SUV
- [ ] Tarefa 4: realizar a listagem da Categoria com mais Carros

## Tabela Aluguel

- [ ] Tarefa 1: realizar a listagem da Quantidade de carros em cada categoria
- [ ] Tarefa 2: realizar a listagem dos Aluguéis que Finalizam em Outubro
- [ ] Tarefa 3: realizar a listagem dos Carros alugados em Novembro
- [ ] Tarefa 4: realizar a listagem dos Carros com aluguel total acima de R$ 1000,00


## 💻 Pré-requisitos

Você está recebendo o arquivo SQL, contendo a base de dados inteira (duas tabelas).

> [!TIP]
> O primeiro passo deve ser a importação da base de dados.

> [!IMPORTANT]
> Não esqueça de hospedar os arquivos no WAMP Server.

## 📖 Referências
- ObjetoPDO->query('Instrução SQL'): prepara e executa uma instrução SQL e e retorna um objeto de instrução, geralmente chamado $stmt. Utilizada quando o usuário não interage com a aplicação.
    Ex.: $stmt = $conn->query("SELECT * FROM tbl_contatos");
- $stmt->fetchAll(Modo): retorna as linhas de um conjunto de resultados. Modo define o formato desse retorno, utiliza-se PDO::FETCH_OBJ. Este modo retornará cada linha como um objeto com nomes de propriedades que correspondem aos nomes das colunas retornados no conjunto de resultados. Ex.: 
$stmt->fetchAll(PDO::FETCH_OBJ) poderia retornar $carro->modelo, $aluno->nome, $cliente->cpf, etc.
- Utilize fetch para listar apenas um valor
- Utilize fetchAll para listar mais de dois valores
- para SQL, consulta o diretório SQL
- Formatar data: date('formato',valor) Ex.: date('d/m/Y',$valor)
- Converter string para tipo datetime: strtotime(string) Ex.: strtotime($valor)
- Formatar valores monetários: number_format(valor, casas_decimais, separador_decimal, separador_milhar) 
Ex.: number_format($valor,2,',','.')