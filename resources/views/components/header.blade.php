<header class="bg-white border-b-2 flex items-center justify-between p-4">

    {{-- logo --}}
    <div>
        logo
    </div>

    @auth
    <form action="{{ route('auth.logout') }}" method="post">
        <button type="submit" class="bg-white p-2 border-2">
            Sair
        </button>
    </form>
    @endauth

    @guest
        <a href="{{ route('site.login') }}" class="bg-white p-2 border-2">
            login
        </a>
    @endguest
</header>