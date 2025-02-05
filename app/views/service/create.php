<?php include '../app/views/layout/header.php'; ?>
<h1>Cadastrar Serviço</h1>
<form action="/store" method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <textarea name="descricao" placeholder="Descrição" required></textarea>
    <input type="number" name="preco" placeholder="Preço" required>
    <button type="submit">Salvar</button>
</form>
<?php include '../app/views/layout/footer.php'; ?>
