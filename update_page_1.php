<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>

<?php
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        $query = "select * from 'usuario' where 'nome' = '$nome'";
        $result = mysql_query($conn, $query);
        if(!$result){
            die("query Failed".mysqlerror());
        }
        else{
            $row = mysql_fetch_row($result);
            print_r($row);
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #dad7cd;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 15px;
            color: white;
            background-color: rgba(0, 0, 0, 0.9);
            color: white;
        }
        fieldset{
            border: 3px solid dodgerblue;
            padding: 30px 50px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: #0077b6;
            border-radius: 8px;
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
            background-color: #0077b6;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            color: white;
        }
        #submit:hover{
            background-color: deepskyblue;
            cursor: pointer;
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
        <form action="" method="post">
            <fieldset>
                <legend>Editar Usuário</legend><br>
                <div class="input-box">
                    <label>Nome:</label><br><br>
                    <input type="text" name="nome" id="" placeholder="Nome Completo" value="<?php echo $row['nome']"><br><br>

                    <label>Email:</label><br><br>
                    <input type="email" name="email" id="" placeholder="Digite o email" value="<?php echo $row['nome']"><br><br>

                    <label>Telefone:</label><br><br>
                    <input type="tel" name="telefone" id="" placeholder="Telefone Completo" value="<?php echo $row['nome']"><br><br>

                    <input href="lista.php" id="submit" type="submit" value="Editar">
                </div>
            </fieldset>    
        </form>
    </div>