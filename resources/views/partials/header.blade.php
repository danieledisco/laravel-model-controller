<header>
    <header class="bg-dark">
        <nav class="nav justify-content-center  ">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }} "
                href="{{ route('home') }}" aria-current="page">Home</a>
            <a class="nav-link {{ Route::currentRouteName() === 'single' ? 'bg-primary text-white' : '' }}"
                href="{{ route('single') }}">Single</a>
        </nav>
    </header>
</header>
