<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <a class="nav-item nav-link active" href="{{route('contacts.create')}}">Adicionar <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{route('contacts.index')}}">Exibir</a>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </header>
    <div class="container">

        <form action="{{route('contacts.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input class="form-control" placeholder="Ex: Paulo Montier" type="text" name="nome" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input class="form-control" placeholder="Apenas números" maxlength="11" type="text" name="telefone" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" placeholder="paulomontier@email.com" type="email" name="email" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="social">Círculo Social:</label>
                    <select class="form-control" name="social">
                        <option value="Indefinido">Indefinido</option>
                        <option value="Profissional">Profissional</option>
                        <option value="Acadêmico">Acadêmico</option>
                        <option value="Pessoal">Pessoal</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <br>
                        <button type="submit" value="" class="btn btn-dark right">CADASTRAR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>