<?php

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $CPF = $_POST['CPF'];
        $Telefone = $_POST['telefone'];
        $Celular = $_POST['Celular'];
        $Email = $_POST['email'];
        $result = mysqli_query($connection, "INSERT INTO cadastro (nome,email,idade) 
        VALUES ('$nome','$email','$idade')");

        header('Location: listagem.php');
    }
  ?>