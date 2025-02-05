<link rel="stylesheet" href="../assets/style.css">

<?php 
$file = $_SERVER['DOCUMENT_ROOT'] . '/AulaPHPdev32/SistemaCadastroServicos/app/views/layout/header.php';
if (!file_exists($file)) {
    die("Erro: O arquivo $file não foi encontrado.");
} else {
    include $file;
}

include __DIR__ . '/../layout/header.php';;
?>
<h1>Lista de Serviços</h1>
<ul>
    <?php foreach ($services as $service): ?>
        <li>
            <?php echo $service['nome']; ?> - R$ <?php echo $service['preco']; ?>
            <a href="/edit?id=<?php echo $service['id']; ?>">Editar</a>
            <a href="/delete?id=<?php echo $service['id']; ?>">Excluir</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include __DIR__ . '/../layout/footer.php'; ?>
