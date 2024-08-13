<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="CadastroAnimal.css">
</head>
<body>
    <form action="CadastroAnimalExe.php" method="post"
    enctype="multipart/form-data">
      
        <fieldset>
            <legend>Cadastro do Animal</legend>
            <div>
            <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*">
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
            </div>
            <div>
                <label for="especie">Espécie</label>
                <input type="text" name="especie" id="especie" placeholder="Digite a espécie do animal">
            </div>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca" placeholder="Digite a Raça do animal">
            </div>
            <div>
                <label for="data_nascimento">Data de nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Digite a data de nascimento do animal">
            </div><br>
            <div>
                <label id="castrado" for="castrado">Situação da castração</label>
                <input type="radio" name="castrado" id="castrado" value="1">Castrado
            </div><br>
            <div>
                <label for="pessoa">Dono</label>
                <select name="pessoa" id="pessoa">
                <?php 
                    include('../includes/conexao.php');
                    $sql = "SELECT * FROM pessoa ";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."/"."</option>";
                    }
                    ?>
                                                           
                </select>
            </div> <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div> <br>
            <div>
                <button><a href="../index.html">voltar</a></button>
            </div>
</body>
</html>