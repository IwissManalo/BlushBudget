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
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit">Register</button>
    </form>
    
</div>
</body>
</html>