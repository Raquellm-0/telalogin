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
        border-collapse: collapse;
        font-size: 15px;
        text-align: left;
        transform: translate(-0%,-0%);
        margin-top: 50px;
    }
    table th, table td{
        padding: 10px 20px;
        border: 1px solid #d9f3ff;
    }
    table th{
        background-color: #426bc2;
        color: white;
    }
    table tr:nth-child(even){
        background-color: #1F2D6A;
    }
    table tr:hover{
        background-color: #C4DFFF;
        color: #0b1957;
    }
    fieldset{
        border: 3px solid #d2b3db;
        padding: 40px 90px;
    }
    legend{
        border: 1px solid #d2b3db;
        padding: 10px;
        text-align: center;
        background-color: #d2b3db;
        border-radius: 8px;
        font-size: 20px;
        color: white;
    }
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 90px;
        border-radius: 15px;
        background-color: #0b1957;
        color: white;
    }
    .ed{
        color: #FBBD08;
        text-decoration: none;
    }
    .ed:hover{
        color: #0b1957;
        cursor: pointer;
    }
    .ex{
        color: #D02225;
        text-decoration: none;
    }
    .ex:hover{
        color: #0b1957;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend>LISTAR USUÁRIOS</legend>
        
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
        </fieldset>
    </div>
 
            <?php 
                if(!empty($dados))
                {
                    foreach($dados as $pessoa):
                ?>
                     <tr>
                        <td><?php echo $pessoa ['nome']; ?></td>
                        <td><?php echo $pessoa ['email']; ?></td>
                        <td><?php echo $pessoa ['telefone']; ?></td>
                        <td><a class="ed" href="update.php?id_usuario=<?php echo $pessoa ['id_usuario']; ?>" class="btn btn-success">Editar</a></td>
                        <td><a class="ex" href="delete.php?id_usuario=<?php echo $pessoa ['id_usuario']; ?>" class="btn btn-success" class="btn btn-danger">Excluír</a></td>
                        
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
