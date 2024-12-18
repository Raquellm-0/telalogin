
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastrousuarioturma33";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT id_usuario, nome, email, telefone, senha FROM usuario";
$result = $conn->query($sql);
?>

<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table borde="1">
        <tr>
            <th>ID Usuário</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Senha</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_usuario"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telefone"] . "</td>";
            }
            
        } else {
            echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>


