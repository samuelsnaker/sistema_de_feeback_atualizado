<?php

 include_once('config.php');

 if(isset($_POST['update']))
 {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $sua_experiencia = $_POST['sua_experiencia'];
    $feedback = $_POST['feedback'];

    $sqlUpdate = "UPDATE usuarios SET nome= '$nome', email='$email', telefone='$telefone',
    sexo='$sexo', data_nascimento='$data_nascimento', sua_experiencia='$sua_experiencia', feedback='$feedback' 
    WHERE id = '$id' ";

    $result = $conexao->query($sqlUpdate);

 }

 header('Location: listagem.php');

?>