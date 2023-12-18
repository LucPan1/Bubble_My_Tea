<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <h1 class="titre">Bubble My tea</h1>
<a href="http://">Mes commandes</a>
<a href="{{ route('accueil') }}">Accueil</a>
    <a href="{{ route('profil') }}">editer votre Profil</a>
    {{-- <a href="{{ route('connection.show1') }}">Se déconnecter</a> --}}
    <form action="{{ route('profil.modifier') }}" method="post">
    @csrf
    @if(isset($user))
    <label for="name">Nom :</label><br>
    <input type="text" name="name" id="name" value="{{ $user->name }}"><a href="#"><i class="fa fa-pencil"></i></a>
    <br>
    <label for="prenom">Prenom :</label><br>
    <input type="text" name="prenom" id="prenom" value="{{ $user->prenom }}"><a href="#"><i class="fa fa-pencil"></i></a>
     <br>
    <label for="email">Email :</label><br>
    <input type="email" name="email" id="email" value="{{ $user->email }}"><a href="#"><i class="fa fa-pencil"></i></a>
    <br><br>
        <button type="submit">Modifier</button>
    @endif
    </form>
   
</body>
</html>
