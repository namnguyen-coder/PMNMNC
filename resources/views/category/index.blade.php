<h2>Danh sách danh mục</h2>

<a href="{{ route('category.create') }}">➕ Thêm mới</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Hành động</th>
    </tr>

    @foreach($categories as $cat)
    <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->name }}</td>
        <td>
            <a href="{{ route('category.edit', $cat->id) }}">Sửa</a> |
            <a href="{{ route('category.delete', $cat->id) }}">Xóa</a>
        </td>
    </tr>
    @endforeach
</table>
