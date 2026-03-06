<form action="{{ route('product.update',$product->id) }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="name" value="{{ $product->name }}">

<input type="number" name="price" value="{{ $product->price }}">

<button type="submit">Cập nhật</button>

</form>