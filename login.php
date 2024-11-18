<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #dad7cd;
        }
        .tela{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        #button-1{
            background-color: #0077b6;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            color: white;
        }
        #button-1:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        .msg-erro-c{
            font-size: 15px;
            top: 50%;
            left: 50%;
            transform: translate(42%,37rem);
            padding: 60px;
            color: white;
        }
        #insc{
            color: white;
            font-size: 15px;
            top: 60%;
            left: 50%;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="tela">
        <h1>Tela Login</h1><br><br>
        <form method="POST">
            <label>Usuario:</label><br><br>
            <input type="email" name="email" id="" placeholder="Digite seu email."><br><br>
            <label>Senha:</label><br><br>
            <input type="password" name="senha" id="" placeholder="**********"><br><br>
            <input id="button-1" type="submit" value="LOGAR"><br><br>
            <a id="insc" href="cadastro.php">INSCREVA-SE</a>
        </form>
    </div>
    <?php
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $usuario->conectar("cadastrousuarioturma33","localhost","root","");
                if($usuario->msgErro == "")
                {
                    if($usuario->logar($email, $senha))
                    {
                        header("location: areaRestrita.php");
                    }
                    else
                    {
                        ?>
                            <div class="msg-erro-c">
                                <p>Email e/ou senha incorretos.</p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        <div class="msg-erro-c">
                            <?php echo "Erro: ".$usuario->msgErro; ?>
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                    <div class="msg-erro-c">
                        <p>Preencha todos os campos.</p>
                    </div>
                <?php
            }
        }
    ?>
</body>
</html>