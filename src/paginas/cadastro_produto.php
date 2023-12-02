<!DOCTYPE html>
<html>

<head>
    <title>Comex - Cadastro Produto</title>
</head>

<body>
    <h1>Caadstro Comex</h1>
    <form action = "Acoes\cadastrar_produto.php" method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="number" step="0.01" name="preco" placeholder="Preço">
        <input type="number" step="1" name="qtd_estoque" placeholder="Quantidade">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>