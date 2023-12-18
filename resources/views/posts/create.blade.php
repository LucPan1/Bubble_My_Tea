@extends("layouts.register")

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

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1 class="title"> Register </h1>


    <form action="/registerPOST" method="POST">
        @csrf
        
    <input type="text" placeholder="nom" name="name"><br /><br />
    <input type="text" placeholder="prenom" name="prenom"><br /><br />
    <input type="text" placeholder="email" name="email"><br /><br />
    {{-- {{-- <input type="text" placeholder="motdepasse" name = "motdepasse"> --}}
    <input type="password" placeholder="motdepasse" name="password"><br /><br />
    <input type="text" placeholder="adresse" name="adresse"><br /><br />
    <input type="text" placeholder="tel" name="tel"><br /><br />


    <button> S'inscrire </button>
     
    </form>
@endsection