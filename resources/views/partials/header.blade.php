<header>
    <div class="container pt-3 d-flex justify-content-between">
        <div id="img_container">
            <a href="{{ route('navbar_elements.comics') }}"><img src="img/dc-logo.png" alt="dc-logo"></a>
        </div>
        <div id="navbar_container">
            <nav class="navbar-nav">
                <ul class="d-flex list-unstyled pt-5">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.characters' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.characters') }}">
                            characters
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.comics' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.comics') }}">
                            comics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.movies' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.movies') }}">
                            movies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.tv' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.tv') }}">
                            tv
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.games' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.games') }}">
                            games
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.collectibles' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.collectibles') }}">
                            collectibles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.videos' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.videos') }}">
                            videos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.fans' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.fans') }}">
                            fans
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.news' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.news') }}">
                            news
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'navbar_elements.shop' ? 'active' : '' }}"
                            href="{{ route('navbar_elements.shop') }}">
                            shop
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
