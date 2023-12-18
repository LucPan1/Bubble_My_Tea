<form action="{{ route('product.delete', $item->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer le produit</button>
  </form>