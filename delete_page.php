<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastrousuarioturma33";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_GET['id_usuario'])) {
    $id = $_GET['id_usuario'];
    $query = "DELETE * FROM `usuario` WHERE `id_usuario` = '$id'";
    $result = mysqli_query($conn, $query);


    if(!$result){
        die("Query Falied".mysqli_erro());
    }
    else{
        header('location:areaRestrita.php?delete_msg=Dados excluídos com sucesso');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluír Usuário</title>
</head>
<body>
</body>
</html>