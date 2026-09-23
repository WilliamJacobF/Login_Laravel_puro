<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login pagekk</title>
</head>

<body>
    <h1>login</h1>
    @if (session()->has('success'))
    {{ session()->get('success') }}
    @endif
    @error('error')
    <span>{{ $message }}</span>
    @enderror

    <form action="{{ route('login-store') }}" method="post">
        @csrf
        <input type="text" name="email" value="teste@test@gmail.com">
        <input type="password" name="password" value="1235678">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>