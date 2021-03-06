<nav class="navbar navbar-expand-lg navbar-dark nav-layout mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">BDoctor.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(Route::has('login'))
        @auth
        <a class="nav-link text-white d-none d-lg-block d-xl-block" href="{{ route('doctors.show', Auth::user()->id) }}">
            Benvenuto Dr. {{ Auth::user()->surname }}!
        </a>
        @endauth
        @endif
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            @if(Route::has('login'))
            <ul class="navbar-nav">
 
                @auth
                <li class="nav-item active btn">
                    <a class="nav-link" href="{{ route('doctors.show', Auth::user()->id) }}">Profilo</a>
                </li>
                <li class="nav-item active btn">
                    <a class="nav-link" href="{{ route('doctors.edit', Auth::user()->id) }}">Modifica profilo</a>
                </li>
                <li class="nav-item active btn">
                    <a class="nav-link" href="{{route('messages.index') }}">Messaggi</a>
                </li>
                <li class="nav-item active btn">
                    <a class="nav-link" href="{{route('reviews.index')}}">Recensioni</a>
                </li>
                <li class="nav-item active btn btn-danger">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @else
                    <li class="nav-item m-1">
                        <a class="nav-link btn btn-info" href="/login">Accedi</a>
                    </li>
                    
                    
                    @if (Route::has('register'))
                    <li class="nav-item m-1">
                        <a class="nav-link btn" href="/register" style="background-color:#ff6700; color:whitesmoke;">Sei un dottore? <span class="text-white"> Iscriviti! </span></a>
                    </li>
                    @endif

                @endauth
            </ul>
            @endif
        </div>
    </div>
</nav>
