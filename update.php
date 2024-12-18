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
    $query = "SELECT * FROM `usuario` WHERE `id_usuario` = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

}

if (isset($_POST['update_usuario'])){
    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }    


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $query = "UPDATE `usuario` SET `nome` = '$nome', `email` = '$email', `telefone` = '$telefone' WHERE `id_usuario` = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } 
    else{
        header('Location: areaRestrita.php?update_msg=Editado com sucesso');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f7f4ed;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 15px;
            background-color: #0b1957;
            color: white;
        }
        fieldset{
            border: 3px solid #d2b3db;
            padding: 30px 50px;
        }
        legend{
            border: 1px solid #d2b3db;
            padding: 10px;
            text-align: center;
            background-color: #d2b3db;
            border-radius: 8px;
            font-size: 15px;
        }
        .input-box{
            position: relative;
        }
        input{
            background: none;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;
            color: white;
            border-bottom: 1px solid white;
            letter-spacing: 1px;
        }
        #submit{
            background-color: #426bc2;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            color: white;
        }
        #submit:hover{
            background-color: #e9f3ff;
            cursor: pointer;
            color: #0b1957;
        }
        .msg-erro-c{
            font-size: 20px;
            top: 50%;
            left: 50%;
            transform: translate(40%,42rem);
            padding: 60px;
            color: white;
        }
    </style>
</head>


<body>
<div class="box">
    <form action="update.php?id_usuario=<?php echo $id; ?>" method="post">
        <fieldset>
            <legend>Editar Usuário</legend><br>
            <div class="form-group">
                <label for="nome">Nome:</label><br><br>
                <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br><br>
            </div>  
            <div class="form-group">
                <label for="email">Email:</label><br><br>
                <input type="email" name="email" placeholder="Digite o email" 
                    value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>"><br><br>
            </div>
            <div class="input-box">
                <label for="telefone">Telefone:</label><br><br>
                <input type="tel" name="telefone" placeholder="Telefone" 
                    value="<?php echo isset($row['telefone']) ? $row['telefone'] : ''; ?>"><br><br>
            </div>    
            <input href="areaRestrita.php" id="submit" name="update_usuario" type="submit" value="Editar">
        </fieldset>    
    </form>
</div>


</body>
</html>