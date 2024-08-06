<?php
include('../includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM cidade WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="AlteraCidade.css">
    <title>Document</title>
</head>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
            <legend>Cadastro de cidade</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?>">
            </div>
            <div>
                <label for="nome">Estado</label>
                <select name="estado" id="estado">
                    <option value="Acre" 
                    <?php echo $row['estado'] == "Acre" ? "selected" : "" ?>>Acre
                </option>
                    <option value="Alagoas"
                    <?php echo $row['estado'] == "Alagoas" ? "selected" : "" ?>>Alagoas
                </option>
                    <option value="Amapá"
                    <?php echo $row['estado'] == "Amapá" ? "selected" : "" ?>>Amapá
                </option>
                    <option value="Amazonas"
                    <?php echo $row['estado'] == "Amazonas" ? "selected" : "" ?>>Amazonas
                </option>
                    <option value="Bahia"
                    <?php echo $row['estado'] == "Bahia" ? "selected" : "" ?>>Bahia
                </option>
                    <option value="Ceará"
                    <?php echo $row['estado'] == "Ceará" ? "selected" : "" ?>>Ceará
                </option>
                    <option value="Distrito Federal"
                    <?php echo $row['estado'] == "Distrito Federal" ? "selected" : "" ?>>Distrito Federal
                </option>
                    <option value="Espírito Santo"
                    <?php echo $row['estado'] == "Espírito Santo" ? "selected" : "" ?>>Espírito Santo
                </option>
                    <option value="Goiás"
                    <?php echo $row['estado'] == "Goiás" ? "selected" : "" ?>>Goiás
                </option>
                    <option value="Maranhão"
                    <?php echo $row['estado'] == "Maranhão" ? "selected" : "" ?>>Maranhão
                </option>
                    <option value="Mato Grosso"
                    <?php echo $row['estado'] == "Mato Grosso" ? "selected" : "" ?>>Mato Grosso
                </option>
                    <option value="Mato Grosso do Sul"
                    <?php echo $row['estado'] == "Mato Grosso do Sul" ? "selected" : "" ?>>Mato Grosso do Sul
                </option>
                    <option value="Minas Gerais"
                    <?php echo $row['estado'] == "Minas Gerais" ? "selected" : "" ?>>Minas Gerais
                </option>
                    <option value="Pará"
                    <?php echo $row['estado'] == "Pará" ? "selected" : "" ?>>Pará
                </option>
                    <option value="Paraíba"
                    <?php echo $row['estado'] == "Paraíba" ? "selected" : "" ?>>Paraíba
                </option>
                    <option value="Paraná"
                    <?php echo $row['estado'] == "Paraná" ? "selected" : "" ?>>Paraná
                </option>
                    <option value="Pernambuco"
                    <?php echo $row['estado'] == "Pernambuco" ? "selected" : "" ?>>Pernambuco
                </option>
                    <option value="Piauí"
                    <?php echo $row['estado'] == "Piauí" ? "selected" : "" ?>>Piauí
                </option>
                    <option value="Rio de Janeiro"
                    <?php echo $row['estado'] == "Rio de Janeiro" ? "selected" : "" ?>>Rio de Janeiro
                </option>
                    <option value="Rio Grande do Norte"
                    <?php echo $row['estado'] == "Rio Grande do Norte" ? "selected" : "" ?>>Rio Grande do Norte
                </option>
                    <option value="Rio Grande do Sul"
                    <?php echo $row['estado'] == "Rio Grande do Sul" ? "selected" : "" ?>>Rio Grande do Sul
                </option>
                    <option value="Rondônia"
                    <?php echo $row['estado'] == "Rondônia" ? "selected" : "" ?>>Rondônia
                </option>
                    <option value="Roraima"
                    <?php echo $row['estado'] == "Roraima" ? "selected" : "" ?>>Roraima
                </option>
                    <option value="Santa Catarina"
                    <?php echo $row['estado'] == "Santa Catarina" ? "selected" : "" ?>>Santa Catarina
                </option>
                    <option value="São Paulo"
                    <?php echo $row['estado'] == "São Paulo" ? "selected" : "" ?>>São Paulo
                </option>
                    <option value="Sergipe"
                    <?php echo $row['estado'] == "Sergipe" ? "selected" : "" ?>>Sergipe
                </option>
                    <option value="Tocantins"
                    <?php echo $row['estado'] == "Tocantins" ? "selected" : "" ?>>Tocantins
                </option>
                </select>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            </div>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>