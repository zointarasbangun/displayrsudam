<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link d-flex align-items-center justify-content-center shadow-sm rounded" style="width: 100%; height: 60px; background-color: #e3f1ff;">
        <img src="{{ asset('live/assets/img/rsudam.png') }}" alt="User Image" style="opacity: .9; max-width: 170%; max-height: 100%; object-fit: contain;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @if (Auth::user()->role == 'admin')
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li id="menu-home" class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:home-simple"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:briefcase-check"></i>
                                <p>Layanan Unggulan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:person-search"></i>
                                <p>Dokter Spesialis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.testimoni.index') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:youtube"></i>
                                <p>Testimoni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:map-marker-loop"></i>
                                <p>Peta & Kontak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.runningtext.index') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:edit"></i>
                                <p>Running Text</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:logout"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            @elseif(Auth::user()->role == 'superadmin')
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li id="menu-home" class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:home-simple"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li id="menu-klien" class="nav-item">
                            <a href="{{ route('superadmin.kelolaakun') }}" class="nav-link">
                                <i class="iconify nav-icon ml-1" data-icon="line-md:account-add"></i>
                                <p>Master Akun</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:briefcase-check"></i>
                                <p>Layanan Unggulan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:person-search"></i>
                                <p>Dokter Spesialis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('superadmin.testimoni.index') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:youtube"></i>
                                <p>Testimoni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:map-marker-loop"></i>
                                <p>Peta & Kontak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('superadmin.runningtext.index') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:edit"></i>
                                <p>Running Text</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:logout"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endif
        </div>
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var menuItems = document.querySelectorAll('.nav-item');

        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener('click', function () {
                localStorage.setItem('openedMenu', menuItem.id);
                menuItems.forEach(function (item) {
                    item.classList.remove('active');
                    if (item.id !== menuItem.id && item.classList.contains('menu-open')) {
                        item.classList.remove('menu-open');
                    }
                });
                menuItem.classList.add('active');
            });
        });
    });
</script>