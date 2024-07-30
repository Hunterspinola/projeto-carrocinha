<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro do Dono</legend>
    <?php
    include('includes/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    echo "<h1>Dados do Dono</h1>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Endereço: $endereco<br>";
    echo "Bairro: $bairro<br>";
    $sql = "INSERT INTO pessoa(nome, email, endereco, bairro, id_cidade)";
    $sql .= " VALUES('".$nome."','".$email."','".$endereco."','".$bairro."','".$cidade."' )";
    echo $sql;
    //executa comando do banco de dados 
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h2>Dados cadastrados com sucesso</h2>";
    }
    else{
        echo "<h2>Erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
    ?>
    <a href="ListarPessoa.php">Ver Pessoas cadastrados</a>
    </fieldset>
</body>
</html>