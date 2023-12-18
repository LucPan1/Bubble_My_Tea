<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    bonjour {{session('user')->name}}
    
    <a href="{{ route('accueil') }}">Mon Profil</a>

    <a href="http://">Mes commandes</a>
    <a href="{{ route('user.logout') }}">Se déconnecter</a>

    <br><br><br>
  

</body>
</html>
