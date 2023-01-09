<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_editar.css">
    <title>Editar</title>
</head>
<body>

<header>
    <h1>Editar Peças</h1>
    <h1><a id="voltar" href="menu.php">Voltar</a></h1>
</header>
<section>

<div class="container">
    
<?php
include_once('config.php'); //incluindo a configuração do banco
$sql="SELECT * FROM pecas"; //passando o select
$result = $conexao->query($sql);
/*print_r ($result);

*/


?>

<table width ="100% "border ='2' id="tabelinha">
        <caption>Tabela de Peças </caption>  <!-- Desceição da tabela-->
        <thead>
            <th>Código do item</th>
            <th>Nome da Peça</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>...</th>
            <th>...</th>
        </thead>

        <tbody>
            <?php 
            while($itens_peca=mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>". $itens_peca['id_codigo']."</td>";
                echo"<td>". $itens_peca['nome_peca']."</td>";
                echo"<td>". $itens_peca['preco']."</td>";
                echo"<td>". $itens_peca['quantidade']."</td>";
                echo"<td> <a href='editar_peca.php?id_codigo=$itens_peca[id_codigo]' id=editar>Editar</a></td>";
                echo"<td> <a href='excluir_peca.php?id_codigo=$itens_peca[id_codigo]' id=excluir>Excluir</a></td>";
                echo"</tr>";

            }
           
            ?>
        </tbody>
        
    </table>

  




</div>

<br>





</section>
</body>
</html>