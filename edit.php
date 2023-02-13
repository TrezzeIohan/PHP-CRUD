<?php  
if(!empty($_GET['email'])){
    include_once('config.php');

    $email = $_GET['email'];

    $sqlSelect = "SELECT * FROM usuarios WHERE email='$email'";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
    
        while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
          
    }
    else{
        header('Location: sistema.php');
    }

    //print_r($result);


    
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
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" value="<?php echo $nome?>" required>
                    <label for="nome" class="label-input">Nome Completo</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="input-user" value="<?php echo $senha?>" required>
                    <label for="nome" class="label-input">Senha</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="email" name="email" id="email" class="input-user" value="<?php echo $email?>" required>
                    <label for="email" class="label-input">Email</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="input-user" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="label-input">Telefone</label>
                </div>

                    <p>Sexo: </p>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $sexo == 'feminino' ? 'checked':'' ?> required>
                    <label for="feminino">Feminino</label>
                    <br>

                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $sexo == 'masculino' ? 'checked':'' ?>  required>
                    <label for="masculino">Masculino</label>
                    <br>

                    <input type="radio" id="outro" name="genero" value="outro" <?php echo $sexo == 'outro' ? 'checked':'' ?>  required>
                    <label for="outro">Outro</label>
                    <br><br>

                
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc?>" required>   
                <br>
                <br>

                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user" value="<?php echo $cidade?>" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user" value="<?php echo $estado?>" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br>

                <div class="input-box">
                    <input type="text" name="endereco" id="edereco" class="input-user" value="<?php echo $endereco?>" required>
                    <label for="endereco" class="label-input">Endereço</label>
                </div>
                <br>

                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>