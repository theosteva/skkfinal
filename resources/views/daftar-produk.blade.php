<!DOCTYPE html>
<html lang="en">
@include('layouts.app')


<body>
@include('pages.header')
    <div id="content-wrapper">
        <section id="tim" class="white">
            <div class="container">
                <div class="gap"></div>
                <!-- <div class="dsa-img-center">
                    <img src="images/produk-kami.png" />
                </div> -->
                <div class="center gap fade-down section-heading">
                    <h2 class="color-layanan">
                        Daftar Produk
                    </h2>
                </div>
                <div class="gap"></div>
                <div class="row">
                    @php
                        $products = \App\Models\Product::where('is_active', true)->orderBy('order')->get();
                    @endphp
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="post">
                                <div class="post-img-content">
                                    <img src="{{ asset('storage/' . $product->image) }}" class="img-responsive" alt="{{ $product->name }}" />
                                    <div class="overlay">
                                        <a class="preview btn btn-outlined btn-primary" href="{{ $product->link }}" target="_blank"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h2 class="post-title autoheightTitle dsa-center-text">{{ $product->name }}</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="gap"></div>
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