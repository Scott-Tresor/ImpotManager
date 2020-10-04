
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">PANEL ADMINISTRATEUR</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="ti-pie-chart menu-icon"></i>
                <span class="menu-title">CONTRIBUABLES</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('impot.index') }}">
                <i class="ti-layout-list-post menu-icon"></i>
                <span class="menu-title">IMPOTS LOCATIFS</span>
            </a>
        </li>
    </ul>
</nav>
