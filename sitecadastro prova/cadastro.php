<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prova</title>
</head>
<body>

<div class="container2">
    <form action="insert.php" method="post">
        
        <p>Nome:</p>
        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
        <br><br>

        <p>CPF:</p>
        <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF">
        <br><br>

        <p>RG/Insc Est:</p>
        <input type="text" name="rg" id="rg" placeholder="Digite o seu RG/Ins Est">
        <br><br>

        <p>Site:</p>
        <input type="text" name="site" id="site" placeholder="Digite o seu Site">
        <br><br>

        <p>Telefone Principal:</p>
        <input type="text" name="tel" id="tel" placeholder="Digite o seu Telefone Principal">
        <br><br>

        <p>Telefone 2:</p>
        <input type="text" name="tel2" id="tel2" placeholder="Digite o seu Telefone secundario">
        <br><br>

        <p>E-Mail Principal:</p>
        <input type="text" name="email" id="email" placeholder="Digite o seu E-mail principal">
        <br><br>

        <p>Profissão:</p>
        <input type="text" name="prof" id="prof" placeholder="Digite o seu Profissão">
        <br><br>

        <p>Estado Civil:</p>
        <input type="text" name="civil" id="civil" placeholder="Digite o seu Estado Civil">
        <br><br>

        <p>Nascimento:</p>
        <input type="date" name="nascimento" id="nascimento" placeholder="Digite o seu Nascimento">
        <br><br>

        <a href="#" onclick="reload()">Criar novo usuário</a>
        <button type="submit" class="button">Criar</button>
        
    </form>
</div>
    

    <script>
        function reload(){
              window.location.href = "./cadastro.php"
        }
      
    </script>
</body>
</html>