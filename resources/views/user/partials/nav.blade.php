
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                    <div class="d-flex">
                        <a href="#" class="text-white me-4"><i class="fas fa-envelope text-secondary me-2"></i>lpperempuanpekanbaru@gmail.com</a>
                        <a href="#" class="text-white me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>(0761) 8402148</a>
                    </div>
                </div>

               <div class="col-lg-6 text-center text-lg-end mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" 
                    href="https://www.instagram.com/lpperempuanpekanbaru/?hl=en" 
                    target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram fw-normal text-secondary"></i>
                    </a>
                    
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" 
                    href="https://www.facebook.com/people/lpperempuanpekanbaru/100089841414386/" 
                    target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f fw-normal text-secondary"></i>
                    </a>
                    
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" 
                    href="https://www.tiktok.com/@lapasperempuanpkbr" 
                    target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-tiktok fw-normal text-secondary"></i>
                    </a>
                    
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle" 
                    href="https://x.com/LppPku/" 
                    target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter fw-normal text-secondary"></i>
                    </a>
                </div>
            </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="display-5 text-primary m-0">
                        <img src="img/logo.png" class="img-fluid" alt="" />
                        <span>Si</span>Jitu
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        
                        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link {{ Request::is('profil*', 'struktur-organisasi*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Profil</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="/profil" class="dropdown-item {{ Request::is('profil*') ? 'active' : '' }}">Tentang Kami</a>
                                <a href="/struktur-organisasi" class="dropdown-item {{ Request::is('struktur-organisasi*') ? 'active' : '' }}">Struktur Organisasi</a>
                            </div>
                        </div>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link {{ Request::is('daftar-pengunjung*', 'layanan-wbp*', 'produk-wbp*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Layanan</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="/daftar-pengunjung" class="dropdown-item {{ Request::is('daftar-pengunjung*') ? 'active' : '' }}">Pendaftaran Pengunjung</a>
                                <a href="/layanan-wbp" class="dropdown-item {{ Request::is('layanan-wbp*') ? 'active' : '' }}">Layanan WBP</a>
                                <a href="/produk-wbp" class="dropdown-item {{ Request::is('produk-wbp*') ? 'active' : '' }}">Produk WBP</a>
                            </div>
                        </div>

                        <a href="/berita-kami" class="nav-item nav-link {{ Request::is('berita*') ? 'active' : '' }}">Berita</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->