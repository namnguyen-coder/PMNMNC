<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>
</head>
<body>
    <h2>Nhập tuổi</h2>

    <form method="POST" action="/save-age">
        @csrf
        <input type="text" name="age" placeholder="Nhập tuổi">
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
