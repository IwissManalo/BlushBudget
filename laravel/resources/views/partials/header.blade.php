<header class="font-sans header bg-blush p-4 shadow-md sticky top-0 z-50">
    <nav class="nav flex items-center justify-between">

        <a href="/home">
            <img src="{{ asset('images/bbLogo.png') }}" class="size-10 bg-white rounded-lg shadow-md">
        </a>

        <div>

            @auth

                <a href="/home">Home</a>

                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button>Logout</button>
                </form>

            @else

                <a href="/home" class="bg-white mr-10 ">Home</a>
                <a href="/home">Register</a>
                <a href="/home">Login</a>

            @endauth

        </div>

    </nav>
</header>
