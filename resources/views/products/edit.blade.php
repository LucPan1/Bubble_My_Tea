@extends("layouts.modifyProducts")

@section('main')
    <form action="{{ route('product.update', $dataProductAdmin->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">
    <input type="text" placeholder="nom" name="name" value="{{ $dataProductAdmin->name }}">
    <input type="text" placeholder="description" name="description" value="{{ $dataProductAdmin->description }}">
    <input type="text" placeholder="price" name="price" value="{{ $dataProductAdmin->price }}">
    <input type="file" accept="image/png, image/jpeg" name="picture">

    <button type="submit">Modifier</button>
</form>
@endsection