<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id_codigo=$_POST['id_codigo_escondido'];
        $nome=$_POST['nome'];
        $codigo =$_POST['codigo'];
        $preco=$_POST['preco'];
        $quantidade=$_POST['quantidade'];

        
        $sqlInsert = "UPDATE pecas SET id_codigo='$codigo',nome_peca='$nome',preco='$preco',quantidade='$quantidade' WHERE id_codigo='$id_codigo'";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: tabela.php');

?>