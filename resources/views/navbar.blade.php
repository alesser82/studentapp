<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-dark">
    <a class="navbar-brand" href="#">StudentApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    @if (!empty($page) && $page === 'homepage')
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
        </li>
    @endif

    @if (!empty($page) && $page === 'student')
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/student') }}">Siswa</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/student') }}">Siswa</a>
        </li>
    @endif

    @if (!empty($page) && $page === 'about')
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/about') }}">Tentang Kami</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
        </li>
    @endif
        </ul>
        <a class="nav-link text-black-50" href="{{ url('/login') }}">Login</a>
    </div>
</nav>