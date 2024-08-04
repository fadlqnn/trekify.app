<header class="navbar" id="navbar">
    <div class="nav" id="header">
        <span>Trekify</span>
    </div>
    <nav>
        <div id="navigation">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#guide">Guide</a></li>
                <li><a href="#market">Market</a></li>
                <li><a href="#au">About Us</a></li>
                <div class="login">
                    <i class="fa-regular fa-user" id="iconLogin"></i>
                    @if (auth()->user())
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" aria-hidden="true"
                            class="text-black font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                            Hello, {{ auth()->user()->name }}
                            </a>
                        </button>
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y rounded-lg shadow w-44 dark:hover:text-white">
                            @can('admin')
                                <li>
                                    <a href="{{ route('dashboard.index') }}" class="block px-4 py-2 text-xs">Dashboard</a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{ url('/logout') }}" class="block px-4 py-2 text-xs">Log
                                    Out</a>
                            </li>
                        </div>
                    @else
                        <li><a id="textHref" href="{{ route('login.index') }}"> Log In or Sign Up </a></li>
                    @endif
                </div>
            </ul>
        </div>
    </nav>
    </div>
</header>
