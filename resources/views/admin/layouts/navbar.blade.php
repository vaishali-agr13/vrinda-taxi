<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button type="submit" class="btn btn-danger btn-sm mt-1">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>
     </ul>
</nav>