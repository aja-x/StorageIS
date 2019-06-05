<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu Utama
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('home') }}" aria-expanded="false">
                            <i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span>
                        </a>
                        <a class="nav-link" href="{{ route('gudang.index') }}">
                            <i class="fas fa-fw fa-warehouse"></i> Gudang
                        </a>
                        <a class="nav-link" href="{{ route('blok.index') }}">
                            <i class="fas fa-fw fa-boxes"></i> Blok
                        </a>
                    </li>
                    <li class="nav-divider">
                        Menu Master
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-6" aria-controls="submenu-6">
                            <i class="fas fa-fw fa-cogs"></i> Master </a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kota.index') }}">Asal Kota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('jenisberas.index') }}">Jenis Beras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kualitasberas.index') }}">Kualitas Beras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('berat.index') }}">Berat Beras</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
