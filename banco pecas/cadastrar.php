<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Site</title>
</head>
<body>

<header>
    <h1>Cadastrar Peças</h1>
    <h1><a href="menu.php">Voltar</a></h1>
</header>
<section>



<form method='POST' action='negocio_alterar_peca.php'>
<div class="container">



Código do item <input type="text" name="codigo" id="codigo_peca"class="cadastro"><br>
Nome da Peça <input type="text" name="nome" id="nome_peca" class="cadastro"><br>
Preço <input type="text" name="preco" id="preco_peca"class="cadastro"><br>
Quantidade <input type="text" name="quantidade" id="quantidade_peca"class="cadastro"><br>
<br>
<button type="submit">Cadastrar</button>
<button type="reset">Limpar Formulário</button>

</div>

<br>




</form>
</section>
</body>
</html>