@extends("layouts.admin")

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
{{-- @foreach($data as $data)
    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">{{ $data->name }}</h5> --}}
            {{-- <p class="card-text">{{ $data->picture }}<img src=" {{ asset('upload/product/' . $data->picture) }}"></p>
            <p class="card-text">{{ $data->description }}</p>
            <input type="checkbox" id="Tapioca passion" name="Tapioca passion"  />
            <label for="Tapioca coco">Tapioca exotique du Pérou</label>
          </div>
          <input type="checkbox" id="Tapioca passion" name="Tapioca passion"  />
            <label for="Gelé passion avec oreo">Gelé passion avec oreo</label>
          </div>
            <p class="card-text">{{ $data->price }}</p>
            <input type="button" value="Ajouter au panier" />  
        </div>
    </div> --}}
    {{-- {{ $data->name }}
    {{ $data->picture }}
    {{ $data->description }}
    {{ $data->price }} --}}
    {{-- @endforeach --}} 

<form method="post" action="{{ route('connexion_post_admin') }}">
  @csrf
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter password" name="password" required>
  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="password"> <a href="#">Forgot password?</a></span>
    </div>
  </form>

  @if(session('status'))
  <p>{{ session('status') }}</p>
  @endif

  <form action="/addAdmin" method="POST" enctype="multipart/form-data">
    @csrf
<input type="text" placeholder="firstname" name="firstname">
<input type="text" placeholder="surname" name="surname">
{{-- {{-- <input type="text" placeholder="motdepasse" name = "motdepasse"> --}}
<input type="text" placeholder="username" name="username">
<input type="password" placeholder="password" name="password">

<button> Ajouter </button>
</form>

@endsection

