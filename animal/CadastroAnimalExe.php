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
        <legend>Cadastro do animal</legend>
    <?php
    include('../includes/conexao.php');
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = $_POST['castrado']== "castrado" ? 1 : 0;
    $pessoa = $_POST['pessoa'];

    echo "<h1>Dados do animal</h1>";
    echo "Nome: $nome<br>";
    echo "Espécie: $especie<br>";
    echo "Raça: $raca<br>";
    echo "Data de nascimento: $data_nascimento<br>";
    echo "Castrado: " . ($castrado ? 1 : 0) . "</br>";

    $sql = "INSERT INTO pessoa (nome, especie, raca, data_nascimento, castrado, id_pessoa)";
    $sql .= " VALUES ('".$nome."','".$especie."','".$raca."','".$data_nascimento."','".$castrado."','".$pessoa."' )";
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
    <a href="listarAnimal.php">Ver animais cadastrados</a>
    </fieldset>
</body>
</html>