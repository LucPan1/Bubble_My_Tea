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
    
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

    
    @foreach($dataProductAdmin as $item)
    <center>
        <div class="card-container">
    <div class="card">
        <div class="card-body"> 
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text"><img src="{{ asset('upload/product/' . $item->picture) }}"></p>
            <p class="card-text">{{ $item->description }}</p>
            <input type="checkbox" id="Tapioca passion" name="Tapioca passion"  />
            <label for="Tapioca coco">Tapioca exotique du Pérou</label>
        </div>
        <div>
            <input type="checkbox" id="Tapioca passion" name="Tapioca passion"  />
            <label for="Gelé passion avec oreo">Gelé passion avec oreo</label>
        </div>
        <p class="card-text">{{ $item->price }}</p>
        <a href="{{ route('products.edit', $item->id)}}" type="button"> Modifier le produit </a>
        {{-- <input type="button" wire:click="editProduit" value="Modifier le produit" />   --}}
    </br>
    <form action="{{ route('product.delete', $item->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer le produit</button>
  </form>


    </div>
    </div>
</center>
    {{-- {{ $data->name }}
    {{ $data->picture }}
    {{ $data->description }}
    {{ $data->price }} --}}
    @endforeach

@endsection