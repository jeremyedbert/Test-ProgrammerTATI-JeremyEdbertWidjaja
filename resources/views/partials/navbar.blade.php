<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-left: 8rem; margin-right: 8rem">
    <div class="container-fluid" style="flex: auto; justify-content: space-between">
        <div>
            <a class="navbar-brand" href="{{ route('home') }}">Program Jeremy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Daily Log
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('user.index') }}">User</a></li>
                        <li><a class="dropdown-item" href="{{ route('log.index') }}">Log</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('provinsi.index') }}">Data Provinsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kinerja') }}">Predikat Kinerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('helloworld') }}">Hello World!</a>
                </li>
            </ul>
        </div>
        @if (Auth::check())
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hi, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        @else
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            You are logged out
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
