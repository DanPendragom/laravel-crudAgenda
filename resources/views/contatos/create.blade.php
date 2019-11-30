<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Contato</title>
</head>

<body>
    <form action="{{route('contacts.store')}}" method="POST">
        @csrf
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" />

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" />

        <label for="email">Email:</label>
        <input type="text" name="email" />

        <label for="social">Circulo Social:</label>
        <select name="social">
            <option value="null">Indefinido</option>
            <option value="profissional">Profissional</option>
            <option value="academico">Acadêmico</option>
            <option value="pessoal">Pessoal</option>
        </select>
        <input type="submit" value="Submit" />
    </form>
</body>

</html>