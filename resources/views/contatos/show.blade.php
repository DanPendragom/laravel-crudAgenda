@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a class="nav-item nav-link" href="{{route('contacts.create')}}">Adicionar</a>
                    <a class="nav-item nav-link" href="{{route('contacts.index')}}">Exibir</a>
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
                    <th scope="col">E-MAIL</th>
                    <th scope="col">CÍRCULO SOCIAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->tell}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->social}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>