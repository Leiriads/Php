<?php
if(!empty($_GET['id_codigo'])){
    include_once('config.php');
    $id=$_GET['id_codigo'];
    $sql="SELECT * FROM pecas WHERE id_codigo=$id";
    $result=$conexao->query($sql);
    #print_r($result); visualizar os parametros passados 
    if($result->num_rows > 0){
        while($user_data=mysqli_fetch_assoc($result))
            {
                $codigo=$user_data['id_codigo'];
                $nome=$user_data['nome_peca'];
                $preco = $user_data['preco'];
                $quantidade = $user_data['quantidade'];  #o que ta entre colchete é os campos da tabela do banco
               
                
            }
        }
        else{
            header('Location: menu.php');
        }
    }
    #print_r($preco); 
?>



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
    <h1>Editar Peças</h1>
    <h1><a href="tabela.php">Voltar</a></h1>
</header>
<section>



<form method='POST' action='salvar_editar.php'>
<div class="container">



Código do item <input type="text" name="codigo" id="codigo_peca"class="cadastro" value="<?php echo $codigo; ?>"><br>
Nome da Peça <input type="text" name="nome" id="nome_peca" class="cadastro" value="<?php echo $nome; ?>"><br>
Preço <input type="text" name="preco" id="preco_peca"class="cadastro" value="<?php echo $preco; ?>"><br>
Quantidade <input type="text" name="quantidade" id="quantidade_peca"class="cadastro" value="<?php echo $quantidade; ?>"><br> 

<br>
<button type="submit" name="update">Editar</button>
<input type="hidden" name="id_codigo_escondido" value="<?php echo $codigo; ?>">


</div>

<br>




</form>
</section>
</body>
</html>