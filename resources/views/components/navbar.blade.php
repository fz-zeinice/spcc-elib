
<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-bg-primary fs-1 fw-bolder" href="/">
                <img src="{{ asset('img/spcc.png') }}" alt="SPCC Logo" width="200" height="60">
                E-Library
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex me-auto ms-auto" role="search" onsubmit="return searchFunction(event)">
                    <input class="form-control me-2 text-bg-primary" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                    <button class="btn btn-outline-success text-bg-primary" type="submit">Search</button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-bg-primary" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-bg-primary" aria-current="page" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-bg-primary" aria-current="page" href="mybooks">My Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-bg-primary" aria-current="page" href="profile">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-bg-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="physicalbooks">Physical Books</a></li>
                            <li><a class="dropdown-item" href="ebooks">E-Books</a></li>
                            <li><a class="dropdown-item" href="subject">Subjects</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
