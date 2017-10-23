<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form </title>



    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <html>

    <head>
        <title>Page Title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>
        <section class="cor">
            <form action="send.php" method="post">
                <h1>Faça seu Cadastro</h1>
                <ul style="list-style-type:none">
                    <li style="">
                        <label>Nome: </label>
                        <input type="text" name="nome" placeholder="Digite somente seu nome" size="20" required>
                        <label> Sobrenome: </label>
                        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" size="50" required>
                    </li>
                    <li>
                        <label>E-mail: </label>
                        <input type="email" name="email" size="89" placeholder="Digite seu e-mail" required>
                    </li>
                    <li>
                        <label>Endereço: </label>
                        <input type="text" name="endereco" placeholder="Digite seu endereço" size="50" required>
                        <label> Bairro: </label>
                        <input type="text" name="bairro" placeholder="Digite seu Bairro" size="22" required>
                    </li>
                    <li>
                        <label>Ano de Nascimento </label>
                        <input type="date" name="nascimento" required>
                    </li>
                    <li>
                        <label>Sexo: </label>
                        <label> Masculino
                            <input type="radio" value="masculino" name="sexo" class="radio" required>
                        </label>
                        <label> Feminino </label>
                        <input type="radio" name="sexo" value="feminino">
                    </li>
                    <li>
                        <input type="submit" value="Cadastrar" id="cadastro">
                    </li>
                    <li>
                        <input type="submit" value="Login in Facebook" id="facebook">
                    </li>
                    <li>
                        <input type="submit" value="Login in Google+" id="google">
                    </li>
                </ul>
            </form>
        </section>
    </body>

    </html>


</body>

</html>
