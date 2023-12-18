@extends("layouts.default")

@section('main')   
<header>
<nav class="mask">
    
<div class="list">
  <h2>Bubble My Tea</h2>

  <ul>
    <li>
        <a  class="home-nav" href="/connection" role="button">Login</a>

        <a class="home-nav" href="/register" role="button">Register</a>
    </li>
  </ul>
</div>
</nav>
</header>


<div class="hello">
<h1>Welcome to our website !</h1>
<center><img src="images/bubble_tea_image_accueil.jpg"  alt="bubble_tea"/></center>
</div>
@endsection