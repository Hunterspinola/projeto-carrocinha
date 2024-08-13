<?php
include('../includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM animal WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="AlteraAnimal.css">
</head>
<body>
    <form action="AlteraAnimalExe.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Cadastro do Animal</legend>
            <div>
                <?php
                    if($row['foto'] != ""){
                        echo "<img src='".$row['foto']."' width='80' height='100'/><br>";
                    }
                ?>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*">
            </div>
            <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?>" />
                </div>
                <div>
                    <label for="especie">Espécie</label>
                    <input type="text" name="especie" id="especie" value="<?php echo $row['especie'] ?>" />
                </div>
                <div>
                    <label for="raca">Raça</label>
                    <input type="text" name="raca" id="raca" value="<?php echo $row['raca'] ?>" />
                </div>
            <div>
                <label for="data_nascimento">Data de nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $row['data_nascimento'] ?>" />
            </div><br>
            <div>
                <label id="text" for="castrado">Situação da castração</label>
                <input type="radio" name="castrado" id="castrado" value="1"<?php echo $row['castrado'] == 1 ? "checked" : "" ?> /><label id="castrado">Sim</label>
                <input type="radio" name="castrado" id="castrado" value="1"<?php echo $row['castrado'] != 1 ? "checked" : "" ?> /><label id="castrado">Não</label>
            </div><br>
            <div>
                <label for="pessoa">Dono</label>
                <select name="pessoa" id="pessoa"> <br>
                    <?php 
                    include('../includes/conexao.php');
                    $sql = "SELECT * FROM pessoa ";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."</option>";
                    }
                    ?>
                </select>
            </div> <br>
            <input type="hidden" name='id' value='<?php echo $id ?>'>
            <div>
                <button type="submit">Cadastrar</button>
            </div> <br>
            <div>
                <button><a href="index.html">voltar</a></button>
            </div>
</body>
</html>