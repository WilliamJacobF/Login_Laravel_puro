<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login pagekk</title>
</head>

<body>
    <h1>login</h1>
    @if(session('success'))
    {{ session('success') }}
    @endif
    @error('error')
    {{ $message }}
    @enderror

    <form action="{{ route('login-store') }}" method="post">
        @csrf
        <input type="email" name="email" value="teste@gmail.com">
        <input type="password" name="password" value="123456">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>