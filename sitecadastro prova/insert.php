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
            $cpf=$_POST['cpf'];
            $rg =$_POST['rg'];
            $site=$_POST['site'];
            $tel=$_POST['tel'];
            $tel2=$_POST['tel2'];
            $email=$_POST['email'];
            $prof=$_POST['prof'];
            $civil=$_POST['civil'];
            $nascimento=$_POST['nascimento'];


            $erro=FALSE;

                        // empty é vazio
            // strlen tamanho

            if(empty($nome) OR strstr($nome,' ')){
                echo 'O campo Nome está vazio! <br>';
                $erro=TRUE;
            }

            if(empty($rg) or strstr($rg,' ')){
                echo 'Campo RG está vazio. <br>';
                $erro=TRUE;
            }
            
            if(empty($site) or strstr($site,' ')){
                echo 'Campo Site está vazio. <br>';
                $erro=TRUE;
            }

            if(empty($tel) or strstr($tel,' ')){
                echo 'Campo Telefone Principal está vazio. <br>';
                $erro=TRUE;
            }

            if(empty($tel2) or strstr($tel2,' ')){
                echo 'Campo Telefone 2 está vazio. <br>';
                $erro=TRUE;
            }

            if(empty($email) or strstr($email,' ')){
                echo 'Campo E-mail está vazio. <br>';
                $erro=TRUE;
            }

            if(empty($prof) or strstr($prof,' ')){
                echo 'Campo Profissão está vazio. <br>';
                $erro=TRUE;
            }

            if(empty($civil) or strstr($civil,' ')){
                echo 'Campo Estado Civil está vazio. <br>';
                $erro=TRUE;
            }

            if(empty($nascimento) or strstr($nascimento,' ')){
                echo 'Campo Nascimento está vazio. <br>';
                $erro=TRUE;
            }

            if(!$erro){

               
                echo'Todos os dados foram digitados corretamente! <br>';
                print_r($_POST['nome']);
                print_r('<br>');
                print_r($_POST['rg']);
                print_r('<br>');
                print_r($_POST['site']);
                print_r('<br>');
                print_r($_POST['tel']);
                print_r('<br>');
                print_r($_POST['tel2']);
                print_r('<br>');
                print_r($_POST['email']);
                print_r('<br>');
                print_r($_POST['prof']);
                print_r('<br>');
                print_r($_POST['civil']);
                print_r('<br>');
                print_r($_POST['nascimento']);





                $result= mysqli_query($conexao, "INSERT INTO cadastro(Nome,CPF,RG_Insc_estado,Site_URL,Telefone_Principal,Telefone_Dois,Email_Principal,Profissao,Estado_civil,Nascimento)VALUES 
                ('$nome',$cpf,'$rg','$site','$tel','$tel2','$email','$prof','$civil','$nascimento')");
                echo'item cadatrado com sucesso !';
                //header('Location: tabela.php');
               
            }else{
                header('Location: cadastro.php');
                
            }

            
            
            

            
            ?>


    </body>
</html>