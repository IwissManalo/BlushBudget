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

    @auth
    <h2>Your account has succesfully logged-in</h2>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Log-out</button>
        </form>

    <div>
        <img src="{{ asset('images/bbLogo.png') }}" alt="Blush Budget Logo" class="logo size-100">
    </div>
    
    <h1 class="font-sans">Welcome to BLUSH Budget</h1>
    <p>Blush Budget is a simple and intuitive budgeting tool designed to help you manage your finances effectively. With Blush Budget, you can easily track your income and expenses, set financial goals, and gain insights into your spending habits. Whether you're looking to save for a big purchase, pay off debt, or simply want to stay on top of your finances, Blush Budget has you covered. Start budgeting today and take control of your financial future!</p>
    <div>
        <img src="{{ asset('images/bbLogo.png') }}" alt="Blush Budget Logo" class="logo size-100">
    </div>
    
    <h1 class="font-sans">Welcome to BLUSH Budget</h1>
    <p>Blush Budget is a simple and intuitive budgeting tool designed to help you manage your finances effectively. With Blush Budget, you can easily track your income and expenses, set financial goals, and gain insights into your spending habits. Whether you're looking to save for a big purchase, pay off debt, or simply want to stay on top of your finances, Blush Budget has you covered. Start budgeting today and take control of your financial future!</p>


    @else

    <h1 class="font-sans">Welcome to BLUSH Budget</h1>
    <h1 class="font-sans">Register an Account now!</h1>
    <a href="/register">REGISTER</a>


    @endauth
</body>
</html>