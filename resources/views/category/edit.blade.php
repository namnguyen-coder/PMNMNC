<h2>Cập nhật danh mục</h2>

<form method="POST" action="{{ route('category.update', $category->id) }}">
    @csrf

    <label>Tên</label><br>
    <input type="text" name="name" value="{{ $category->name }}"><br><br>

    <label>Mô tả</label><br>
    <textarea name="description">{{ $category->description }}</textarea><br><br>

    <label>Danh mục cha</label><br>
    <select name="parent_id">
        <option value="">-- Không có --</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}"
                {{ $category->parent_id == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Cập nhật</button>
</form>
