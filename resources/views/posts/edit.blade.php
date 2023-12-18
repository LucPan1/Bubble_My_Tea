@extends("layouts.register")

@section('main')
    <form action=" {{ route('post.update', $id) }}" method="POST">
        @csrf
        @method('PUT');
    <input type="text" placeholder="nom" name = "nom">
    <input type="text" placeholder="prenom" name = "prenom">
    <input type="text" placeholder="email" name = "email">
    {{-- <input type="text" placeholder="motdepasse" name = "motdepasse">
    <input type="text" placeholder="motdepasse" name = "nom"> --}}

    <button> Modifier </button>
    </form>
@endsection