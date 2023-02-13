<?php  
if(!empty($_GET['email'])){
    include_once('config.php');

    $email = $_GET['email'];

    $sqlSelect = "SELECT * FROM usuarios WHERE email='$email'";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        
        $sqlDelete = "DELETE FROM usuarios WHERE email='$email'";
        $resultDelete = $conexao->query($sqlDelete);
          
    }
}
    header('Location: sistema.php');

?>