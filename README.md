<!DOCTYPE html>
<html>
<head>
  <title>Documentação da API</title>
</head>
<body>
  <h1>API de Registro</h1>

  <h2>Introdução</h2>
  <p>Esta é uma API que permite o armazenamento, exibição e exclusão de registros.</p>

  <h2>Endpoints</h2>

  <h3>1. GET /registros</h3>
  <p>Retorna todos os registros armazenados.</p>

  <h3>2. GET /registros/{id}</h3>
  <p>Retorna um registro específico com base no ID fornecido.</p>

  <h3>3. POST /registros</h3>
  <p>Cria um novo registro com os dados fornecidos.</p>

  <h3>4. PUT /registros/{id}</h3>
  <p>Atualiza um registro específico com base no ID fornecido.</p>

  <h3>5. DELETE /registros/{id}</h3>
  <p>Exclui um registro específico com base no ID fornecido.</p>

  <h2>Exemplos de Uso</h2>

  <h3>Exemplo 1: Obter todos os registros</h3>
  <pre>
    GET /registros
  </pre>

  <h3>Exemplo 2: Obter um registro específico</h3>
  <pre>
    GET /registros/1
  </pre>

  <h3>Exemplo 3: Criar um novo registro</h3>
  <pre>
    POST /registros
    Content-Type: application/json

    {
      "nome": "Exemplo",
      "email": "exemplo@example.com"
    }
  </pre>
  
  <h3>Exemplo 4: Excluir um registro</h3>
  <pre>
    DELETE /registros/1
  </pre>

  <h2>Respostas da API</h2>

  <p>A API responde com os seguintes códigos de status:</p>

  <ul>
    <li>200 - OK: A solicitação foi bem-sucedida.</li>
    <li>201 - Created: O registro foi criado com sucesso.</li>
    <li>400 - Bad Request: A solicitação contém dados inválidos.</li>
    <li>404 - Not Found: O registro solicitado não foi encontrado.</li>
    <li>500 - Internal Server Error: Ocorreu um erro no servidor.</li>
  </ul>

  <h2>Recursos Adicionais</h2>

  <p>Além dos endpoints mencionados acima, a API também pode ter outros recursos, como autenticação, paginação e filtros. Consulte a documentação completa para obter mais detalhes.</p>
</body>
</html>
