<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #1D3557, #457B9D);
        }
        div{
            background-color: rgba(29, 53, 87, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #F1FAEE;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: #A8DADC;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #1D3557;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: #457B9D;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php" style="color: #F1FAEE;">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
