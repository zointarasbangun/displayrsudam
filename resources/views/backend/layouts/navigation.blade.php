<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link d-flex align-items-center justify-content-center shadow-sm rounded "
        style="width: 100%; height: 60px; background-color: #e3f1ff;">
        <img src="{{ asset('live/assets/img/rsudam.png') }}" alt="User Image"
            style="opacity: .9; max-width: 170%; max-height: 100%; object-fit: contain;">
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <!-- Sidebar Menu -->
            @if (Auth::user()->role == 'admin')
            <nav class="">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li id="menu-home" class="nav-item ">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:home-simple"></i>
                            <p>Beranda</p>
                        </a>
                    </li>

                    <li id="menu-l" class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:briefcase-check"></i>
                            <p>Layanan Unggulan</p>
                        </a>
                    </li>

                    <li id="menu-l" class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:person-search"></i>
                            <p>Dokter Spesialis</p>
                        </a>
                    </li>

                    <li id="menu-l" class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:youtube"></i>
                            <p>Testimoni</p>
                        </a>
                    </li>

                    <li id="menu-l" class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:map-marker-loop"></i>
                            <p>Peta & Kontak</p>
                        </a>
                    </li>

                    <li id="menu-l" class="nav-item">
                        <a href="{{ route('runningtext') }}" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:edit"></i>
                            <p>Running Text</p>
                        </a>
                    </li>

                    <li id="menu-logout" class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">
                            <i class="iconify nav-icon" data-icon="line-md:logout"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>

            </nav>
            @elseif(Auth::user()->role == 'superadmin')
                <nav class="">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li id="menu-home" class="nav-item ">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:home-simple"></i>
                                <p>Beranda</p>
                            </a>
                        </li>

                        <li id="menu-klien" class="nav-item">
                            <a href="{{ route('kelolaakun') }}" class="nav-link">
                                <i class="iconify nav-icon ml-1" data-icon="line-md:account-add"></i>
                                <p>Master Akun</p>
                            </a>
                        </li>

                        <li id="menu-l" class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:briefcase-check"></i>
                                <p>Layanan Unggulan</p>
                            </a>
                        </li>

                        <li id="menu-l" class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:person-search"></i>
                                <p>Dokter Spesialis</p>
                            </a>
                        </li>

                        <li id="menu-l" class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:youtube"></i>
                                <p>Testimoni</p>
                            </a>
                        </li>

                        <li id="menu-l" class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:map-marker-loop"></i>
                                <p>Peta & Kontak</p>
                            </a>
                        </li>

                        <li id="menu-l" class="nav-item">
                            <a href="{{ route('runningtext.index') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:edit"></i>
                                <p>Running Text</p>
                            </a>
                        </li>

                        <li id="menu-logout" class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="iconify nav-icon" data-icon="line-md:logout"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>

                </nav>
            @endif
            <!-- /.sidebar-menu -->
        </div>

    </div>
    <!-- /.sidebar -->
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ...

        // Tambahkan event listener untuk menyimpan status menu saat menu diklik
        var menuItems = document.querySelectorAll('.nav-item');

        menuItems.forEach(function(menuItem) {
            menuItem.addEventListener('click', function() {
                // Simpan status menu ke localStorage
                localStorage.setItem('openedMenu', menuItem.id);

                // Bersihkan status menu aktif sebelumnya
                menuItems.forEach(function(item) {
                    item.classList.remove('active');
                });

                // Bersihkan status menu terbuka pada submenu yang tidak aktif
                menuItems.forEach(function(item) {
                    if (item.id !== menuItem.id && item.classList.contains(
                            'menu-open')) {
                        item.classList.remove('menu-open');
                    }
                });

                // Tambahkan kelas aktif pada menu yang diklik
                menuItem.classList.add('active');
            });
        });
    });
</script>



{{--

        <div id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>


        <div class="l-navbar" id="nav-bar">

            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">Bedimcode</span>
                    </a>

                    <div class="nav__list">
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ route('adminDashboard') }}" class="nav__link active">
                            <i class='bx bx-grid-alt nav__icon' ></i>
                                <span class="nav__name">Dashboard</span>
                            </a>
                            @else
                            <a href="{{ route('userDashboard') }}" class="nav__link active">
                                <i class='bx bx-grid-alt nav__icon' ></i>
                                    <span class="nav__name">Dashboard</span>
                                </a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                        <a href="{{ route('createAcount') }}" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        @endif

                        <a href="{{ route('manageAcount') }}" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">kelola akun</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">kondisi kendaraan</span>
                        </a>

                        <a href="{{ route('tipeKendaraan') }}" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Data kendaraan</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Analytics</span>
                        </a>
                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

 --}}
