<!DOCTYPE html>
<html lang="en">
<body>
<h1>{{ $title }}</h1>

<table>
    <tr>
        
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ number_format($product['price']) }} VND</td>
        </tr>
    @endforeach
</table>
<button type="submit" class="button" onclick="GoToAdd()">Thêm sản phẩm</button>
<script>
     function GoToAdd() {
        window.location.href = "{{ route('product.add') }}";
    }
</script>

<br>
<a href ="{{ route('home') }}">Quay lại home</a>
</body>
</html>