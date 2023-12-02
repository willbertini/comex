<!DOCTYPE html>
<html>
<head>
    <t1>Comex - Cadastro Cliente</t1>
</head>
<body>
<form action = "Acoes\cadastrar_cliente.php" method="POST">
    <p>
        <input type="text" name="nome" placeholder="Nome Cliente">
    </p>
    <p>
        <input type="text" name="email" placeholder="Email">
    </p>

    <p>
        <input type="text" name="celular" placeholder="Celular">
    </p>

    <p>
        <input type="text" name="cep" placeholder="CEP">
    </p>
    <p>
        <input type="text" name="estado" placeholder="Estado">
    </p>
    <p>
        <input type="text" name="cidade" placeholder="Cidade">
    </p>
    <p>
        <input type="text" name="bairro" placeholder="Bairro">
    </p>
    <p>
        <input type="text" name="rua" placeholder="Rua">
    </p>
    <p>
        <input type="text" name="numero" placeholder="Número">
    </p>

    <input type="submit" name="Salvar" value="Salvar">
</form>
</body>
</html>