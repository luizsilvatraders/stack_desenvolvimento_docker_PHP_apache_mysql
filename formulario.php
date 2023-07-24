<?php include 'header.php'; ?>

<main class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="cadastrarPecas.php" method="post">
                <div class="mb-3">
                    <label for="nome_peca" class="form-label">Nome da Peça</label>
                    <input type="text" class="form-control" id="nome_peca" name="nome_peca" required>
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" required>
                </div>
                <div class="mb-3">
                    <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
                    <input type="number" class="form-control" id="ano_fabricacao" name="ano_fabricacao" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="">Selecione o Status</option>
                        <option value="Novo">Novo</option>
                        <option value="Usado">Usado</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar Peça</button>
            </form>
        </div>
    </div>
</main>

<!-- Adicione o link para o Bootstrap JS e jQuery (necessários para alguns recursos do Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
