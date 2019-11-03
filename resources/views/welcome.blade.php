<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyDiary</title>
    <link rel="stylesheet" href="../css/global.css" type="text/css" />
    <style type="text/css">
        *{
            font-family: Arial, Helvetica, Sans-serif;
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        form{
            margin:100px 500px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form method="POST" autocomplete="off" action="contacts">
        
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome"/>
        
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone"/>
        
        <label for="email">Email:</label>
        <input type="text" name="email"/>
        
        <label for="social">Circulo Social:</label>
        <select name="social">
            <option value="null">Indefinido</option>
            <option value="profissional">Profissional</option>
            <option value="academico">Acadêmico</option>
            <option value="pessoal">Pessoal</option>
        </select>
        
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>