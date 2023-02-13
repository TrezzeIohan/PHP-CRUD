<?php 
    session_start();
    
    
    // Acessar sistema caso algo seja enviado. Caso contrário, retornar ao login.
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Query para verificar se há uma linha com as mesmas infformações
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        // Armazena o resultado da query sql no banco de dados da variável $conexão
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else{
        header('Location: login.php');
    }

?>