<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('register.attempt') }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"> <br>
        @error('name')
            {{ $message }}
        @enderror <br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"> <br>
        @error('email')
            {{ $message }}
        @enderror <br>
        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password"> <br>
        @error('password')
            {{ $message }}
        @enderror <br>
        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
            placeholder="Password Confirm"> <br>
        <button type="submit">
            Register
        </button>
    </form>
</body>

</html>
