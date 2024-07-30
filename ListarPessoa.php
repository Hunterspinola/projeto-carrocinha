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
    $sql = "SELECT cli.id, cli.nome nomepessoa, cli.email, cli.endereco, cli.bairro, cid.nome nomecidade, cid.estado 
            from pessoa cli 
            left join cidade cid on cid.id = cli.id_cidade";
    $result = mysqli_query($con,$sql);
   
    ?>
    <nav>
        <ul>
        <li><a href="cadastrocidade.html">Cadastrar Animal</a></li>
        <li><a href="listarcidade.php">Ver animais já cadastrados</a></li>
        <li><a href="index.html">MENU</a></li>
        </ul>
        
       
    </nav>

    <h1 align="center">Consulte Dono</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nomepessoa']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['endereco']."</td>";
            echo "<td>".$row['bairro']."</td>";
            echo "<td>".$row['nomecidade']."</td>";
            echo "<td>".$row['estado']."</td>";            
            echo "<td><a href = 'AlteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href = 'DeletaPessoa.php?id=".$row['id']."'>Deleta</a></td>";
            echo "</tr>";
        }
        ?> 
    </table>
    <div>
        <button><a  href="CadastroPessoa.php">Cadastrar nova pessoa</a></button>
    </div><br>
    
    
    
</body>
</html>