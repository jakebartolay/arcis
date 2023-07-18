<nav class="navbar navbar-expand-lg nav-menu shadow">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="../img/arcislogonobg.png" alt="Arcis Logo" width="150" height="auto" class="d-inline-block align-text-top text-black">
            <!-- arcislogonobg -->
        </a>
        <button class="navbar-toggler nav-button border border-dark" type="button" data-toggle="collapse" data-target="#myNavbar">
            <div class="line1 ham"></div>
            <div class="line2 ham"></div>
            <div class="line3 ham"></div>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
            <ul class="navbar-nav ml-aulo">
                @if (Session::has('loginId'))
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item nav-active" href="/"> Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item" href="/profile"> Profile </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item" href="/logout"> Logout </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item nav-active" href="#home"> Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item" href="#explore"> Explore </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item" href="#about"> About </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item" href="#contact"> Contact </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 menu-item" href="/login"> Login </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>