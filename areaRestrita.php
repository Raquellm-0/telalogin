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
    body{
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f7f4ed;
    }
    table{
        width: 40%;
        border-collapse: collapse;
        font-size: 15px;
        text-align: left;
        transform: translate(-20%,10%);
        margin-top: 50px;
    }
    table th, table td{
        padding: 10px;
        border: 1px solid #d9f3ff;
    }
    table th{
        background-color: #0b1957;
        color: white;
    }
    table tr:nth-child(even){
        background-color: #edede9;
    }
    table tr:hover{
        background-color: #ddd;
    }
    h2{
        color: #0b1957;
        font-size: 30px;
        transform: translate(23rem,-20rem);
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
                    <th>Editar</th>
                    <th>Excluír</th>
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
                        <td><a href="update.php?id_usuario=<?php echo $pessoa ['id_usuario']; ?>" class="btn btn-success">Editar</a></td>
                        <td><a href="delete.php?id_usuario=<?php echo $pessoa ['id_usuario']; ?>" class="btn btn-success" class="btn btn-danger">Excluír</a></td>
                        
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
