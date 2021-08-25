<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">My Blog</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('blog') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create') }}">Form</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Good articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Better articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best articles</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
