@extends("layouts.product")

@section('main')

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

    @foreach($data as $data)
    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">{{ $data->name }}</h5> --}}
            <p class="card-text">{{ $data->picture }}<img src=" {{ asset('upload/product/' . $data->picture) }}"></p>
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
    </div>
    @endforeach


        {{-- {{ $data->name }}
    {{ $data->picture }}
    {{ $data->description }}
    {{ $data->price }} --}}

    <form action="/addProduct" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="text" placeholder="nom" name="name">
    <input type="text" placeholder="description" name="description">
    {{-- {{-- <input type="text" placeholder="motdepasse" name = "motdepasse"> --}}
    <input type="text" placeholder="price" name="price">
    <input type="file" accept="image/png, image/jpeg" name="picture">

    <button> Ajouter </button>
    </form>
@endsection