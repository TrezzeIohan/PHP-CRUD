<?php  
if(isset($_POST['submit'])){
    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, 
        "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco)
        VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade', '$estado','$endereco')");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">

    <title>Formulário</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" required>
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="input-user" required>
                    <label for="nome" class="label-input">Senha</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="email" name="email" id="email" class="input-user" required>
                    <label for="email" class="label-input">Email</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="input-user" required>
                    <label for="telefone" class="label-input">Telefone</label>
                </div>

                    <p>Sexo: </p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>

                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>

                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>

                
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>   
                <br>
                <br>

                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="text" name="endereco" id="edereco" class="input-user" required>
                    <label for="endereco" class="label-input">Endereço</label>
                </div>
                <br>

                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>