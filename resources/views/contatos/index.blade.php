@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
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
                    <a class="nav-item nav-link" href="{{route('contacts.create')}}">Adicionar <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="{{route('contacts.index')}}">Exibir</a>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </header>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->tell}}</td>
                    <td><a href="{{route('contacts.show', ['contact'=>$contact->id])}}">Ver mais</a></td>
                    <td><a href="{{route('contacts.edit', ['contact'=>$contact->id])}}">Editar</a></td>
                    <td><a href="{{route('contacts.destroy', ['contact'=>$contact->id])}}">Apagar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>