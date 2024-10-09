<!DOCTYPE html>
<html lang="en">
@include('layouts.app')


<body>
@include('pages.header')

    <div id="content-wrapper">
        <section id="kontak" class="white">
            <div class="container">
                <div class="gap"></div>
                <!-- <div class="dsa-img-center">
                    <img src="images/produk-kami.png" />
                </div> -->
                <div class="center gap fade-down section-heading">
                    <h2 class="color-layanan">
                        Kontak Kami
                    </h2>
                </div>
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 fade-up">
                        <h3>Kontak Informasi</h3>
                        <p><span class="icon icon-home"></span>PT SAKTI KINERJA KOLABORASINDO<br/>
                            <span class="icon icon-phone"></span>(022) 7322-831<br/>
                            <span class="icon icon-mobile"></span>08112232688<br/>
                            <span class="icon icon-envelop"></span> <a href="#">info@ptskk.id</a> <br/>
                        </p>
                    </div>
                    <!-- col -->

                    <div class="col-md-8 fade-up">
                        <h4>Kirim pesan surel</h4>
                        <br>
                        <br>
                        <div id="message"></div>
                        <form method="post" action="php/sending.php" id="contactform">
                            <input type="text" name="name" id="name" placeholder="Name" required/>
                            <input type="text" name="hp" id="name" placeholder="Handphone" required/>
                            <input type="email" name="email" id="email" placeholder="Email" required/>
                            <input type="text" name="website" id="website" placeholder="Website" required/>
                            <textarea name="comments" id="comments" placeholder="Comments" required></textarea>
                            <div class="g-recaptcha" data-sitekey="6Lf9NMYUAAAAAJGdyy0CVdekjPLazi1NGekPqNF8" required></div>
                            <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                        </form>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
                <div class="gap"></div>
            </div>
        </section>
    @include('pages.footer')
    </div>

    <script src="js/plugins.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
