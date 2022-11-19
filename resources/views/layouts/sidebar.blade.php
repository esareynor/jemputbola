<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"
                        srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @foreach ($data['role'] as $r)
                @if (Auth::user()->id == $r->id_user)
                    @if ($r->id_role == 1)
                        @include('layouts/sidebar_admin')
                    @endif
                    @if ($r->id_role == 2)
                        @include('layouts/sidebar_staff')
                    @endif
                    @if ($r->id_role == 3)
                        @include('layouts/sidebar_user')
                    @endif
                @endif
            @endforeach


            <li class="sidebar-item mt-5 border border-danger" style="border-radius:10px">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                    class='sidebar-link text-danger'>
                    <i class="text-danger bi bi-door-closed-fill"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
