<?php
//require_once 'conexao.php';

// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica se os campos obrigatórios foram preenchidos
    if (isset($_POST['nome_peca'], $_POST['modelo'], $_POST['ano_fabricacao'], $_POST['status'])) {
        // Obtém os dados do formulário
        $nome_peca = $_POST['nome_peca'];
        $modelo = $_POST['modelo'];
        $ano_fabricacao = intval($_POST['ano_fabricacao']);
        $status = $_POST['status'];

        // Conexão com o banco de dados (considerando que você já incluiu o arquivo de conexão)
        require_once 'conexao.php';

        // Cria a consulta SQL para inserir os dados na tabela "pecas"
        $sql = "INSERT INTO pecas (nome_da_peca, modelo, ano_de_fabricacao, status)
                VALUES ('$nome_peca', '$modelo', $ano_fabricacao, '$status')";

        // Executa a consulta SQL
        if ($conn->query($sql) === TRUE) {
            // Redireciona para a página "index.php" com uma mensagem de sucesso
            header("Location: index.php?success=true");
            exit();
        } else {
            echo "Erro ao cadastrar a peça: " . $conn->error;
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    } else {
        echo "Todos os campos são obrigatórios.";
    }
}
?>
