<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>   
</body>
</html>
<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("cadastrousuarioturma33", "localhost", "root","");
    $dados = $usuario->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #fefae0;
    }

    table {
        width: 40%;
        border-collapse: collapse;
        margin-left: -50rem;
        font-size: 15px;
        text-align: left;
        
    }

    table th, table td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #bc4749;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #edede9;
    }

    table tr:hover {
        background-color: #ddd;
    }
    button{
        font-size: 10px;
        color: #bc4749;
    }
    button:hover{
        cursor: pointer;
        color: #ef476f;
    }
    h2{
        color: #3a5a40;
        font-size: 30px;
        margin-top: -23rem;
        margin-left: 100px;
    }
    </style>
</head>
<body>
    <div>
        <h2>LISTAR USUÁRIOS</h2>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
 
            <?php 
                if(!empty($dados))
                {
                    foreach($dados as $pessoa):
                ?>
                     <tr>
                        <td><?php echo $pessoa ['nome']; ?></td>
                        <td><?php echo $pessoa ['email']; ?></td>
                        <td><?php echo $pessoa ['telefone']; ?></td>
                        <td><?php echo ['editar']; ?></td>
                        
                     </tr> 

                
                <?php
                endforeach;
                }
                else{
                    echo"Nenhum usuário cadstrado";
                }
            ?>
            </tbody>
        </table>
</body>
</html>
