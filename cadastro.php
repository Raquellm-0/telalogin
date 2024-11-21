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
        .msg-sucesso{
            font-size: 12px;
            top: 52%;
            left: 50%;
            transform: translate(0%,42.5rem);
            padding: 60px;
            color: white;
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
                                <!-- bloco de HTML -->
                                <div class="msg-sucesso">
                                    <p>Cadastrado com Sucesso</p>
                                    <p>Clique <a href="login.php">aqui </a> para logar.</p>
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


