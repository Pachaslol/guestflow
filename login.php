<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #1D3557; /* Azul-marinho */
            color: #F1FAEE; /* Cinza-claro */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div {
            background-color: #457B9D; /* Azul-claro */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 40px 60px;
            border-radius: 15px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #F1FAEE; /* Cinza-claro */
        }

        input {
            padding: 15px;
            width: 100%;
            margin-bottom: 20px;
            border: 2px solid #A8DADC; /* Verde-menta */
            border-radius: 10px;
            font-size: 15px;
            background-color: #FFFFFF; /* Branco */
            color: #1D3557; /* Azul-marinho */
            box-sizing: border-box;
        }

        input:focus {
            border-color: #F1FAEE; /* Cinza-claro */
            outline: none;
        }

        button {
            background-color: #A8DADC; /* Verde-menta */
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #1D3557; /* Azul-marinho */
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #F1FAEE; /* Cinza-claro */
            color: #457B9D; /* Azul-claro */
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br>
        <input type="password" placeholder="Senha">
        <br>
        <button>Enviar</button>
    </div>
</body>
</html>
