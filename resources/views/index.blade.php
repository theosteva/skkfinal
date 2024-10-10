<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.app')
</head>

<body>
    @include('pages.header')

    @php
        $sliders = \App\Models\Slider::where('is_active', true)->orderBy('order')->get();
    @endphp

    <section id="main-slider" class="no-margin background-ms">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $index => $slider)
                    <div class="item {{ $index === 0 ? 'active' : '' }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="carousel-content centered">
                                        <span class="home-icon bounce-in no-display animated bounceIn appear"></span>
                                        <h2 class="boxed animation animated-item-1 fade-down">{{ $slider->title }}</h2><br>
                                        <p class="boxed animation animated-item-2 fade-up">{{ $slider->description }}</p>
                                        <br>
                                        <a class="btn btn-md animation bounce-in" href="{{ $slider->button_link }}">{{ $slider->button_text }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/#main-slider-->

    <div id="content-wrapper">
        <section id="about-us" class="white padding-0 background-session">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 margin-top-40">
                        <div class="center gap fade-down section-heading">
                            <!-- <h2 class="main-title">About Us</h2>
	                        <hr> -->
                            <p class="color-about">Pengembangan Aplikasi yang<br>Berorientasi pada Pengguna</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 fade-up">
                        <p class="blue-core dsa-text-right">
                            Demi memberikan pelayanan yang maksimal, kami terus berupaya untuk mengembangkan aplikasi-aplikasi perkoperasian agar lebih ramah pengguna dengan berbagai latar belakang yang beragam di seluruh Indonesia.
                            <p class="blue-core dsa-text-right">
                                Aplikasi yang dikembangkan akan disesuaikan dengan kebutuhan pengguna koperasi sehingga teknologi yang dikembangkan menjadi tepat guna.
                            </p>
                            <hr class="green-hr">
                            <h4 class="blue-core dsa-text-right dsa-margin-100">
                            </h4>
                    </div>
                    <div class="col-md-6 col-sm-12 fade-up">

                    </div>
                </div>
            </div>
        </section>

        <section id="product" class="white background-layer-dua dsa-join" style="margin-top:-150px">
            <div class="background-session-dua">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="dsa-img-center dsa-margin-60">
                                <img src="images/produk-kami.png" alt="gear-icon" />
                            </div>
                            <div class="center gap fade-down section-heading">
                                <p class="color-layanan">
                                    Sistem Core Banking Koperasi Berbasis Teknologi Sumber Terbuka
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 fade-up">
                            <p class="blue-core dsa-text-center">
                                Demi memberikan pelayanan yang maksimal, kami terus berupaya untuk mengembangkan sistem core banking koperasi agar lebih ramah pengguna dengan berbagai latar belakang yang beragam di seluruh Indonesia.
                            </p>
                            <p class="blue-core dsa-text-center">
                                Sistem yang dikembangkan ini berbasis teknologi sumber terbuka, sehingga bisa diaudit keamanannya.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="images/produk/sakti-link.svg" alt="SAKTI.Link" class="dsa-img-full" />
                        </div>
                        <div class="col-md-3">
                            <img src="images/produk/sicundo.svg" alt="SiCUNDO" class="dsa-img-full" />
                        </div>
                        <div class="col-md-3">
                            <img src="images/produk/mycoop.svg" alt="MyCOOP" class="dsa-img-full" />
                        </div>
                        <div class="col-md-3">
                            <img src="images/produk/sakti-pay.svg" alt="SAKTI.Pay" class="dsa-img-full" />
                        </div>

                    </div>
                </div>
            </div>
        </section>


        @include('pages.footer')
    </div>

    <script src="js/plugins.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChxi4Oxa6saMMdCFl0PgXQsJEF6BXPF0s&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
<div style="position: fixed;
            right: 15px;
            bottom: 93px;
            padding-top: 15px;
            margin-bottom: 0;
            z-index: 998;">
    <a target='_blank' title='Hubungi kami melalui Whatsapp' href='https://wa.me/628112232688'><img style='width:170px' src='https://ptskk.id/img/wa.png'></a>
</div>

</html>

