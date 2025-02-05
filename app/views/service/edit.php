<?php include '../app/views/layout/header.php'; ?>
<h1>Editar Serviço</h1>
<form action="/update" method="POST">
    <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
    <input type="text" name="nome" value="<?php echo $service['nome']; ?>" required>
    <textarea name="descricao" required><?php echo $service['descricao']; ?></textarea>
    <input type="number" name="preco" value="<?php echo $service['preco']; ?>" required>
    <button type="submit">Atualizar</button>
</form>
<?php include '../app/views/layout/footer.php'; ?>