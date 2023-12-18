@extends("layouts.connection")

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

<form method="post" action="{{ route('connexion_post_user') }}" >
  
  @csrf
    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
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

@endsection

