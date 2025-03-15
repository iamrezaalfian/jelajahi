<div class="d-flex ms-auto align-items-center">
    <!-- Tombol Dark Mode -->
    <button id="toggle-dark-mode" class="btn btn-outline-light btn-sm me-3">
        <i id="dark-mode-icon" class="fas fa-moon"></i>
    </button>

    <!-- User Menu -->
    <div class="dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-user"></i> Admin
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>
            </li>
        </ul>
    </div>
</div>
