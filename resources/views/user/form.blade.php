<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><Form></Form></title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" name="email" placeholder="名前">
        <br>
        <br>
        <input type="password" name="password" placeholder="パスワード">
        <br>
        <br>
        <input type="submit" value="ログイン">
    </form>
</body>
</html>