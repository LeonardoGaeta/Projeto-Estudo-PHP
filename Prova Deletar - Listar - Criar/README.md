# Atividade Minha lista de TArefas

> Nesta atividade, você deve realizar o INSERT, SELECT e DELETE de uma tabela de tarefas, simulando uma lista de tarefas.

### Execução

- [ ] Tarefa 1: realizar o cadastro na tabela Produto
      Obs.: Ao cadastrar, especifique o campo a ser cadastrado, pois a data de criação, por ser do tipo Timestamp, cadastra automaticamente
- [ ] Tarefa 2: realizar a listagem na tabela Produto
      Obs.: Utilize o modelo de card disponível para listar os itens dentro do foreach
- [ ] Tarefa 3: realizar o delete de um item na tabela Produto
- [ ] Tarefa 4: realizar a limpeza tabela Produto
      Obs.: Use DELETE sem WHERE
- [ ] Tarefa 5: Se a tabela Produto estiver vazia, exibir o código abaixo:
      <div class="col-md-4 mb-3">
        <p class="text-info">
          Sua lista está vazia ! 
        </p>
      </div>


## 💻 Pré-requisitos

Você está recebendo o arquivo SQL, contendo a base de dados inteira (três tabelas).

> [!IMPORTANT]
> PRIMEIRO PASSO: hospedar os arquivos no WAMP Server.

> [!TIP]
> SEGUNDO PASSO: importação da base de dados.


## 💻 Referências

- ObjetoPDO->prepare('Instrução SQL'): prepara uma instrução para execução de uma instrução SQL e retorna um objeto de instrução, geralmente chamado $stmt. Utilizado sempre que o usuário interage com a aplicação.
  Ex.: $stmt = $conn->prepare("INSERT INTO tbl_contatos VALUES(0,:nome,:email,:telefone)");
- $stmt->bindValue(':alias', $variavel): vincula um valor a um parâmetro (alias) na instrução SQL que foi usada para preparar a instrução. Alias devem ser prefixados com dois-pontos ":" também. 
    Ex.:  $stmt->bindValue(":nome",$campoNome);
  $stmt->bindValue(":email",$campoEmail);
  $stmt->bindValue(":telefone",$campoTelefone);
- $stmt->execute(): executa uma instrução preparada.
- ObjetoPDO->query('Instrução SQL'): prepara e executa uma instrução SQL e e retorna um objeto de instrução, geralmente chamado $stmt. Utilizada quando o usuário não interage com a aplicação.
  Ex.: $stmt = $conn->query("SELECT * FROM tbl_contatos");
- $stmt->fetchAll(Modo): retorna as linhas de um conjunto de resultados. Modo define o formato desse retorno, utiliza-se PDO::FETCH_OBJ. Este modo retornará cada linha como um objeto com nomes de propriedades que correspondam aos nomes das colunas retornados no conjunto de resultados. Ex.: 
$stmt->fetchAll(PDO::FETCH_OBJ) poderia retornar $carro->modelo, $aluno->nome, $cliente->cpf, etc.
- $stmt->rowCount() — Retorna o número de registros afetados pela última instrução SQL
- Formatar data: date('d/m/Y H:i', strtotime($valor_data))