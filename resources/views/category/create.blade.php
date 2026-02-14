<h2>Thêm danh mục</h2>

<form method="POST" action="{{ route('category.store') }}">
    @csrf

    <label>Tên danh mục</label><br>
    <input type="text" name="name"><br><br>

    <label>Mô tả</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Danh mục cha</label><br>
    <select name="parent_id">
        <option value="">-- Không có --</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Lưu</button>
</form>
