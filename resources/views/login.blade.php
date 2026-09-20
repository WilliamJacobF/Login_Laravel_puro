<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login pagekk</title>
</head>

<body>
    <h1>login</h1>
    <form action="{{ route('login-store') }}" method="post">
        @csrf
        <input type="text" name="email" value="teste@teste@gmail.com">
        <input type="password" name="senha" value="12345678">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>