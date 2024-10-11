<div class="sidebar p-0" style="background-color: #007fff !important">
    <div class="close-btn" onclick="toggleSidebar()">&times;</div>
    {{-- <div class="d-flex"> --}}
        <a href="{{ route('admin.dashboard') }}" class="text-white text-decoration-none">
            <span class="fs-4">Admin</span>
        </a>
    {{-- </div> --}}

    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.index') }}" class="nav-link text-white">
            All Users
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.create') }}" class="nav-link" aria-current="page">
                Add User
            </a>
        </li>
        <li>
            <a href="{{ route('pets.index') }}" class="nav-link text-white">
           All Pets
            </a>
        </li>
        <li>
            <a href="{{ route('pets.create') }}" class="nav-link text-white">
            Add Pets
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link" aria-current="page">
                All Category
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('category.create') }}" class="nav-link" aria-current="page">
                Add Category
            </a>
        </li>
    </ul>
    <hr>
    {{-- <div class="dropdown show d-flex px-3"> --}}
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow-lg bg-dark" aria-labelledby="dropdownMenuLink">
            <li class="bg-danger">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    {{-- </div> --}}

</div>
