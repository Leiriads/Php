<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>
           



            <?php
             include_once('config.php'); //incluindo a configuração do banco
            $nome=$_POST['nome'];
            $codigo =$_POST['codigo'];
            $preco=$_POST['preco'];
            $quantidade=$_POST['quantidade'];
            $erro=FALSE;

            // empty é vazio
            // strlen tamanho

            if(empty($nome) OR strstr($nome,' ')){
                echo 'Campo nome está vazio <br>';
                $erro=TRUE;
            }

            if(empty($codigo) or strstr($codigo,' ')){
                echo 'Campo Código está vazio. <br>';
                $erro=TRUE;
            }
            
            

            if(empty($preco)){
                echo 'Campo Preço está vazio <br>';
                $erro=TRUE;
            }
            
            if(empty($quantidade)){
                echo 'Quantidade está vazia <br>';
                $erro=TRUE;
            }

            if(!$erro){

               
                echo'Todos os dados foram digitados corretamente! <br>';
                print_r($_POST['nome']);
                print_r('<br>');
                print_r($_POST['codigo']);
                print_r('<br>');
                print_r($_POST['preco']);
                print_r('<br>');
                print_r($_POST['quantidade']);

                $result= mysqli_query($conexao, "INSERT INTO pecas(id_codigo,nome_peca,preco,quantidade)VALUES ('$codigo','$nome','$preco','$quantidade')");
                echo'item cadatrado com sucesso !';
                header('Location: tabela.php');
               
            }else{
                header('Location: tabela.php');
            }

            
            
            

            
            ?>


    </body>
</html>