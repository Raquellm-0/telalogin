<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
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
            background-color: #f7f4ed;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 70px;
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
            font-size: 16px;
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
        .msg-sucesso{
            font-size: 15px;
            top: 52%;
            left: 50%;
            transform: translate(0%,42.5rem);
            padding: 60px;
            color: white;
            text-align: center;
        }
        .a{
            font-size: 15px;
            top: 52%;
            left: 50%;
            transform: translate(0%,42.5rem);
            padding: 2px;
            color: #e9f3ff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <fieldset>
                <legend>Cadastro de Usuário</legend><br>
                <div class="input-box">
                    <label>Nome:</label><br><br>
                    <input type="text" name="nome" id="" placeholder="Nome Completo"><br><br>

                    <label>Email:</label><br><br>
                    <input type="email" name="email" id="" placeholder="Digite o email"><br><br>

                    <label>Telefone:</label><br><br>
                    <input type="tel" name="telefone" id="" placeholder="Telefone Completo"><br><br>

                    <label>Senha:</label><br><br>
                    <input type="password" name="senha" id="" placeholder="Digite sua Senha"><br><br>

                    <label>Confirmar Senha:</label><br><br>
                    <input type="password" name="confSenha" id="" placeholder="Confirme sua Senha"><br><br><br>

                    <input id="submit" type="submit" value="CADASTRAR">
                </div>
            </fieldset>    
        </form>
    </div>
    
    <?php
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $confSenha = addslashes($_POST['confSenha']);

            if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confSenha))
            {   

                $usuario->conectar("cadastrousuarioturma33","localhost","root","");

                if($usuario->msgErro == "")
                { 
                    if($senha == $confSenha)
                    {

                        if($usuario->cadastrar($nome, $telefone, $email, $senha))
                        { 
                            ?>
                                <div class="msg-sucesso">
                                    <p>Cadastrado com Sucesso</p>
                                    <p class="p">Clique <a class="a" href="login.php">AQUI</a> para logar</p>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div class="msg-erro-c">
                                    <p>Email Já Cadastrado.</p>
                                </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <div class="msg-erro-c">
                            <p>Senha e Confirmar</p>
                            </div>
                        <?php        
                    }
                }
                else
                {
                    ?>
                    <div class="msg-erro-c">
                        <?php echo "Erro: ",$usuario->msgErro;?>
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


