<?php
if(!empty($_GET['id_codigo'])){
    include_once('config.php');

    $id=$_GET['id_codigo'];

    $sql="SELECT * FROM pecas WHERE id_codigo=$id";

    $result=$conexao->query($sql);
    

    ##print_r($result); checar se ta passando tudo ok
    if($result->num_rows > 0){ ##se for maior que 0 significa que existe
       $sqlDelete="DELETE FROM pecas WHERE id_codigo=$id";
       $resultDelete=$conexao->query($sqlDelete); ##passa aqui dentro a query que eu quero executar
       header('Location: tabela.php');
        }
        else{
            header('Location: tabela.php');
        }
    }else{
        header('Location: tabela.php');
    }
    ##print_r($preco);   pra ver o array passando
?>



