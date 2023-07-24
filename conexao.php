<?php
//phpinfo();
// Arquivo conexao.php

// Configurações do banco de dados
$host = 'db'; // Endereço do servidor MySQL (pode ser 'localhost' na maioria dos casos)
$usuario = 'root'; // Nome de usuário do banco de dados
$senha = 'root'; // Senha do banco de dados
$banco = 'banco_sistema_cadastro'; // Nome do banco de dados

// Estabelece a conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die('Erro ao conectar ao banco de dados: ' . $conn->connect_error);
}

// Define o conjunto de caracteres para a conexão (opcional)
$conn->set_charset('utf8');

// Se necessário, você pode descomentar a linha abaixo para exibir uma mensagem de conexão bem-sucedida
// echo 'Conexão bem-sucedida com o banco de dados';

// NOTA: É recomendado utilizar um usuário com permissões restritas para acesso ao banco de dados,
// ao invés de utilizar o usuário 'root' com todas as permissões.

// Caso você queira fechar a conexão em algum momento, utilize a seguinte linha:
// $conn->close();

?>
