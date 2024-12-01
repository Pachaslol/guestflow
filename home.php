<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
      body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #1D3557, #457B9D);
            text-align: center;
            color: #F1FAEE;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; 
            height: 100vh;
        }

        img {
            margin-top: 120px; 
            margin-bottom: 10px;
        }

        .box {
            background-color: rgba(29, 53, 87, 0.9);
            padding: 30px;
            border-radius: 10px;
            margin-top: 10px; 
        }
        a{
            text-decoration: none;
            color: #FFFFFF;
            border: 3px solid #A8DADC;
            border-radius: 10px;
            padding: 10px;
            transition: 0.3s;
        }
        a:hover{
            background-color: #A8DADC;
            color: #1D3557;
        }
    </style>
</head>
<body>
    <img src=" img\guestflow.png" alt="Guestflow" width="222" height="170">
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>
