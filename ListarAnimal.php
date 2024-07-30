<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="ListarPessoa.css">
    <title>Document</title>
</head>
<body>
    
    <?php

    include('includes/conexao.php');
    $sql = "SELECT cli.id, cli.nome nomeanimal, cli.especie, cli.raca, cli.idade, cli.data_nascimento, cli.castrado, cid.nome nomepessoa
            from animal cli 
            left join pessoa cid on cid.id = cli.id_pessoa";
    $result = mysqli_query($con,$sql);
   
    ?>
    <nav>
        <ul>
        <li><a href="cadastrocidade.html">Cadastrar Animal</a></li>
        <li><a href="listarcidade.php">Ver animais já cadastrados</a></li>
        <li><a href="index.html">MENU</a></li>
        </ul>
        
       
    </nav>

    <h1 align="center">Consulte Animal</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Idade</th>
            <th>Data de nascimento</th>
            <th>Estatos de castração</th>
            <th>Nome do dono</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nomeanimal']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['raca']."</td>";
            echo "<td>".$row['idade']."</td>";
            echo "<td>".$row['data_nascimento']."</td>";
            echo "<td>".$row['castrado']."</td>"; 
            echo "<td>".$row['nomepessoa']."</td>";           
            echo "<td><a href = 'AlteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href = 'DeletaPessoa.php?id=".$row['id']."'>Deleta</a></td>";
            echo "</tr>";
        }
        ?> 
    </table>
    <div>
        <button><a  href="CadastroAnimal.php">Cadastrar novo animal</a></button>
    </div><br>
    
    
    
</body>
</html>