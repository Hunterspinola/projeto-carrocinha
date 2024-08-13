<?php
include('../includes/conexao.php');
//UPLOAD FOTO
$nome_foto = "";
if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'fotos/';
    $extensao = strtolower(substr($_FILES['foto']['name'], -4));
    $nome_foto = $pasta_destino . date('Ymd-His').$extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
}
//FIM DO OPLOAD
$id = $_POST['id'];
$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$data_nascimento = $_POST['data_nascimento'];
$castrado = $_POST['castrado'];
$pessoa = $_POST['pessoa'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Alteração de animal</h1>

    <?php
    if($nome_foto == "")
        $sql = "UPDATE Pessoa SET nome = '$nome', especie = '$especie', raca = '$raca', data_nascimento = '$data_nascimento', castrado = '$castrado', pessoa = '$pessoa' WHERE id = $id";
    else
        $sql = "UPDATE Pessoa SET foto = '$nome_foto', nome = '$nome', especie = '$especie', raca = '$raca', data_nascimento = '$data_nascimento', castrado = '$castrado', pessoa = '$pessoa' WHERE id = $id";
    $result = mysqli_query($con, $sql);
        if($result)
        echo "Dados atualizados";
        else
        echo "Erro ao atualizar dados!\n".mysqli_error($con);

    
    ?>
</body>
</html>