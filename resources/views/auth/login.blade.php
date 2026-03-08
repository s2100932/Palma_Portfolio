<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            padding: 40px;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }

        h1 { font-size: 22px; margin-bottom: 24px; }

        label { display: block; font-size: 13px; color: #555; margin-bottom: 6px; }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            margin-bottom: 16px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        input:focus { outline: none; border-color: #343a40; }

        .error { color: #c0392b; font-size: 12px; margin-top: -12px; margin-bottom: 12px; }

        button {
            width: 100%;
            padding: 11px;
            background: #343a40;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            cursor: pointer;
        }

        button:hover { background: #ffc107; color: #343a40; }
    </style>
</head>
<body>

<div class="card">
    <h1>Sign in</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" autofocus required>
        @error('email') <p class="error">{{ $message }}</p> @enderror

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Sign in</button>
    </form>
</div>

</body>
</html>