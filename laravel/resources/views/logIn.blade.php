<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blush Budget</title>

    <link href="https://fonts.googleapis.com/css2?family=Galacial+Indifference&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('images/bbLogo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>

    <!-- Header -->
    @include('partials.header')

    <div style= "border: 3px solid black;">
        <h2>Log-in</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginusername" placeholder="Username" value="{{ old('loginusername') }}"><br><br>
            @error('loginusername')
                <span style="color: red;">{{ $message }}</span><br><br>
            @enderror

            <input type="password" name="loginpassword" placeholder="Password"><br><br>
            @error('loginpassword')
                <span style="color: red;">{{ $message }}</span><br><br>
            @enderror

            <button type="submit">Log-in</button>
        </form>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>