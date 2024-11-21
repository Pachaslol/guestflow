<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
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

        .box {
            color: #F1FAEE; /* Cinza-claro */
            background-color: rgba(29, 53, 87, 0.8); /* Azul-marinho com transparência */
            padding: 20px;
            border-radius: 15px;
            width: 25%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        fieldset {
            border: 3px solid #A8DADC; /* Verde-menta */
            border-radius: 10px;
        }

        legend {
            border: 2px solid #A8DADC; /* Verde-menta */
            padding: 10px;
            text-align: center;
            background-color: #457B9D; /* Azul-claro */
            border-radius: 8px;
            color: #F1FAEE; /* Cinza-claro */
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 2px solid #F1FAEE; /* Cinza-claro */
            outline: none;
            color: #F1FAEE; /* Cinza-claro */
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.5s;
            color: #A8DADC; /* Verde-menta */
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: #A8DADC; /* Verde-menta */
        }

        #data_nascimento {
            border: 2px solid #A8DADC; /* Verde-menta */
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            background-color: #F1FAEE; /* Cinza-claro */
            color: #1D3557; /* Azul-marinho */
        }

        #submit {
            background-color: #A8DADC; /* Verde-menta */
            width: 100%;
            border: none;
            padding: 15px;
            color: #1D3557; /* Azul-marinho */
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }

        #submit:hover {
            background-color: #457B9D; /* Azul-claro */
            color: #F1FAEE; /* Cinza-claro */
        }

        input[type="radio"] + label {
            color: #F1FAEE; /* Cinza-claro */
        }

        input[type="radio"]:checked + label {
            color: #A8DADC; /* Verde-menta */
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Formulário de Convidados</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
