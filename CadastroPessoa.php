<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="CadastroPessoa.css">
</head>
<body>
    <form action="CadastroPessoaExe.php" method="post">
        <fieldset>
            <legend>Cadastro do Dono</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Digite seu Email">
            </div>
            <div>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço">
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro">
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade"> <br>
                    <?php 
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM cidade ";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                    ?>
                </select>
            </div> <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div> <br>
            <div>
                <button><a href="index.html">voltar</a></button>
            </div>
</body>
</html>