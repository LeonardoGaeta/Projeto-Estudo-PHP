# Atividade Select

> Nesta atividade, você deve realizar a listagem de valores vindos do banco de dados.
> Lembre-se que são duas atividades: Livraria e Loja
> As atividades são independentes, ou seja, os códigos de uma não vão, ou não deveriam, intereferir em outra

### 🖥️ Execução

## Atividade 1: Tabela Livraria

- [ ] Tarefa 1: realizar a listagem da tabela Livros
- [ ] Tarefa 2: realizar a listagem da tabela Autores
- [ ] Desafio (opcional): realizar a listagem de livros por autor e mostrar qual é o autor com mais livros

## Atividade 1: Tabela Loja

- [ ] Tarefa 1: realizar a listagem da tabela Produtos
- [ ] Tarefa 2: realizar a listagem da tabela Clientes
- [ ] Desafio (opcional): realizar a listagem dos pedidos com informações dos clientes e produtos e mostrar qual é o cliente que mais gastou na loja


## 💻 Pré-requisitos

Você está recebendo o arquivo SQL, contendo a base de dados inteira (duas tabelas).

> [!TIP]
> O primeiro passo deve ser a importação da base de dados.

> [!IMPORTANT]
> Não esqueça de hospedar os arquivos no WAMP Server.

## 📖 Referências
- new PDO: Cria uma instância PDO representando uma conexão a um banco de dados. Deve ser armazenado em um objeto, tornando-se um ObjetoPDO
  Necessita de 3 parâmetros para funcionar: dsn, username, password
    dsn: nome da fonte de dados que contém a informação requerida para conexão ao banco de dados -> 'driver:dbname=nome_banco;host=local_hospedagem'
    Obs.: driver representa o SGBD em uso (MySQL, PostgreSQL, SQL Server, etc)
    username: nome de usuário para a string DSN
    password: senha para a string DSN
    Ex.: $conn = new PDO(dsn,username,password);
- require_once 'caminho do arquivo': inclui o arquivo informado no caminho do arquivo.
- ObjetoPDO->query('Instrução SQL'): prepara e executa uma instrução SQL e e retorna um objeto de instrução, geralmente chamado $stmt. Utilizada quando o usuário não interage com a aplicação.
    Ex.: $stmt = $conn->query("SELECT * FROM tbl_contatos");
- $stmt->fetchAll(Modo): retorna as linhas de um conjunto de resultados. Modo define o formato desse retorno, utiliza-se PDO::FETCH_OBJ. Este modo retornará cada linha como um objeto com nomes de propriedades que correspondem aos nomes das colunas retornados no conjunto de resultados. Ex.: 
$stmt->fetchAll(PDO::FETCH_OBJ) poderia retornar $carro->modelo, $aluno->nome, $cliente->cpf, etc.