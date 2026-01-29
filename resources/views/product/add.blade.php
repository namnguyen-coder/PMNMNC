<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 40px auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 6px;
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 8px;
        }
        a {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thêm sản phẩm</h2>

    <form>
        <label>Tên sản phẩm</label>
        <input type="text" placeholder="Nhập tên sản phẩm">

        <label>Giá</label>
        <input type="number" placeholder="Nhập giá">

        <label>Mô tả</label>
        <textarea rows="3" placeholder="Mô tả sản phẩm"></textarea>

        <button type="submit">Thêm mới</button>
    </form>

    <a href="{{ route('product.index') }}">← Quay lại danh sách sản phẩm</a>
</div>

</body>
</html>
