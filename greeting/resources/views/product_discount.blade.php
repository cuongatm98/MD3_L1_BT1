<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính giá chiết khấu sản phẩm </title>
</head>
<body>
<form action="/product_discount" method="POST">
    @csrf
    <p>
        <input type="text" name="tensanpham" placeholder="Tên sản phẩm">
    </p>
    <p>
        <input type="number" name="gia" placeholder="giá niêm yết">
    </p>
    <p>
        <input type="number" name="tilechietkhau" placeholder="Tỉ lệ chiết khấu(%)">
    </p>
    <p>
        <button type="submit" name="submit" class="btn btn-primary">Xong</button>
    </p>
</form>

</body>
</html>
