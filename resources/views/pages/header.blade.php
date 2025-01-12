<header class="navbar navbar-inverse navbar-fixed-top " role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                <h3 class="images-logo-place"><img src="images/logo/logo-skk.webp" class="images-logo-header" /></h3>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Beranda</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href='#' data-toggle="dropdown">Tentang Kami
                      <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/#about-us">Tentang PT SKK</a></li>
                        <li><a href="{{ route('lowongan') }}">Lowongan Kerja</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('daftar-produk') }}">Daftar Produk</a></li>
                <li><a href="{{ route('mitra') }}">Mitra</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</header>