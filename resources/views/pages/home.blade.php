@extends('layouts.default')
@section('title', 'Bumi Sukasari Indah')

@section('scripts-reCAPTCHA')
{!! NoCaptcha::renderJs() !!}
@stop

@section('content')
<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mt-30 pb-40">
                    <h4 class="title wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">Bumi Sukasari Indah</h4>
                    <br><br>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.8s">Bumi Sukasari Indah hadir untuk menjadi solusi yang tepat dan Memberikan hunian yang nyaman aman bagi masa depan anda.</p>
                    <br>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">Dengan luas lahan mencapai 25 Hektar, Bumi Sukasari Indah telah tersedia fasilitas yang lengkap seperti masjid dan lapangan olahraga</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
   
        <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container1">
            <div class="ws_images">
                <ul>
                    <li><img src="{{ url('landing/assets/data1/images/f1.png') }}" alt="f1" title="" id="wows1_0"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f2.png') }}" alt="f2" title="" id="wows1_1"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f3.png') }}" alt="f3" title="" id="wows1_2"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f4.png') }}" alt="f4" title="" id="wows1_3"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f5.png') }}" alt="f5" title="" id="wows1_4"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f6.png') }}" alt="f6" title="" id="wows1_5"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f7.png') }}" alt="f7" title="" id="wows1_6"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f8.png') }}" alt="f8" title="" id="wows1_7"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f9.png') }}" alt="f9" title="" id="wows1_8"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f10.png') }}" alt="f10" title="" id="wows1_9"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f11.png') }}" alt="f11" title="" id="wows1_10"/></li>
                    <li><img src="{{ url('landing/assets/data1/images/f12.png') }}" alt="image carousel" title="" id="wows1_11"/></a></li>
                    <li><img src="{{ url('landing/assets/data1/images/f13.png') }}" alt="f13" title="" id="wows1_12"/></li>
                </ul>
            </div>
                <div class="ws_bullets">
                    <a href="#" title="f1"><span><img src="{{ url('landing/assets/data1/tooltips/f1.png') }}" alt=""/>1</span></a>
                    <a href="#" title="f2"><span><img src="{{ url('landing/assets/data1/tooltips/f2.png') }}" alt=""/>2</span></a>
                    <a href="#" title="f3"><span><img src="{{ url('landing/assets/data1/tooltips/f3.png') }}" alt=""/>3</span></a>
                    <a href="#" title="f4"><span><img src="{{ url('landing/assets/data1/tooltips/f4.png') }}" alt=""/>4</span></a>
                    <a href="#" title="f5"><span><img src="{{ url('landing/assets/data1/tooltips/f5.png') }}" alt=""/>5</span></a>
                    <a href="#" title="f6"><span><img src="{{ url('landing/assets/data1/tooltips/f6.png') }}" alt=""/>6</span></a>
                    <a href="#" title="f7"><span><img src="{{ url('landing/assets/data1/tooltips/f7.png') }}" alt=""/>7</span></a>
                    <a href="#" title="f8"><span><img src="{{ url('landing/assets/data1/tooltips/f8.png') }}" alt=""/>8</span></a>
                    <a href="#" title="f9"><span><img src="{{ url('landing/assets/data1/tooltips/f9.png') }}" alt=""/>9</span></a>
                    <a href="#" title="f10"><span><img src="{{ url('landing/assets/data1/tooltips/f10.png') }}" alt=""/>10</span></a>
                    <a href="#" title="f11"><span><img src="{{ url('landing/assets/data1/tooltips/f11.png') }}" alt=""/>11</span></a>
                    <a href="#" title="f12"><span><img src="{{ url('landing/assets/data1/tooltips/f12.png') }}" alt=""/>12</span></a>
                    <a href="#" title="f13"><span><img src="{{ url('landing/assets/data1/tooltips/f13.png') }}" alt=""/>13</span></a>
                </div>
                <div class="ws_script" style="position:absolute;left:-99%"></div>
                <div class="ws_shadow"></div>
        </div>
            <script type="text/javascript" src="{{ url('landing/assets/engine1/wowslider.js') }}"></script>
            <script type="text/javascript" src="{{ url('landing/assets/engine1/script.js') }}"></script>
            <!-- End WOWSlider.com BODY section -->    
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <h4 class="title wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">Kenapa harus Bumi Sukasari Indah ?</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <br>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Akses Mudah 20 Menit ke Gerbang Tol Dawuan.</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.2s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Sistem 1 Gerbang</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.4s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Dekat Pusat Transportasi Umum 20 Menit ke Terminal Klari Karawang.</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.6s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Lapangan Olahraga</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.8s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Masjid, Fasilitas Kesehatan dan Pendidikan</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.0s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Perumahan subsidi dengan Luas 25 Hektar</h4>
                    </div>
                </div> <!-- single about -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== PRINICNG STYLE EIGHT START ======-->

<section id="pricing" class="pricing-area">
    <div class="container">
        <div class="row justify-content-center">                
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="1.0s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-map-marker fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Akses Mudah</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Bumi Sukasari Indah berlokasi dekat dengan Gerbang Tol Dawuan, dan transportasi umum.</p>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>
            
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="1.2s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-shield fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Legalitas Aman</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Proses legalitas di Bumi Sukasari Indah mudah dan cepat.</p>
                        <br>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>
            
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="1.4s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-money fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Harga Terjangkau</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Bumi Sukasari Indah memiliki harga yang sangat terjangkau dan dapat dicicil hanya dengan 900rb-an.</p>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRINICNG STYLE EIGHT ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8"></div>
                <div class="section-title text-center mt-30 pb-40">
                    <h4 class="title wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">Bumi Sukasari Indah</h4>
                    <br><br>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">Pilihan lainnya untuk rumah subsidi Karawang adalah Bumi Sukasari Indah. Perumahan ini berada di lingkungan yang sangat tertata. Di sekitarnya juga terdapat supermarket dan ruko-ruko yang menyediakan kebutuhan pokok.</p>
                    <br>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.2s">Di sisi Perumahan Bumi Sukasari Indah terdapat sawah hijau yang sangat luas.Perumahan bumi sukasari indah dikembangkan oleh PT. Karinda Bangun Nusa. Perumahan subsidi ini di jual hanya dengan 140juta per unitnya. Fasilitas rumah sudah termasuk kamar mandi, dua kamar tidur, daya listrik 900 watt.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title text-center">
                    <h4 class="title wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">Kelebihan Bumi Sukasari Indah</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <br>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Ready Stock</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.2s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Sertifikat SHGB</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.4s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Dinding Batako</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.6s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Dapur Sudah ditutup Setengah</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.8s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Sudah Memakai Baja Ringan</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.0s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Proses Cepat</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.2s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Bebas Pilih Unit (Tersedia)</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.4s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Instalasi Listrik sudah tersedia</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.6s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Instalasi Air sudah tersedia</h4>
                    </div>
                </div> <!-- single about -->
            </div>

            <div class="col-lg-6">
                <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.8s">
                    <div class="about-icon">
                        <i class="fa fa-check-square fa-5x" style="color: #00E5A3" aria-hidden="true"></i>
                    </div>
                    <div class="about-content media-body">
                        <br>
                        <h4 class="about-title">Tersedia Fasilitas Masjid, lapangan Bulutangkis dll.</h4>
                    </div>
                </div> <!-- single about -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== PRINICNG STYLE EIGHT START ======-->

<section id="pricing" class="pricing-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3 class="title">Spesifikasi Tipe 30/60</h3>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <br>

        <div class="row justify-content-center">                
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-thumb-tack fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Struktur</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Pondasi batu kali, sloof kolom & ring balok, beton bertulang, dinding batako, plester aci luar dalam, rangkap atap baja ringan, atap genteng metal.</p>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>
            
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.8s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-thumb-tack fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Arsitektur</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Lantai dalam dan teras, keramik 30/30, Dinding Finish Cat Tembok, Plafond GRC, Kusen Pintu & Jendela Finish Cat, Daun pintu, Kaca polos, Pintu km/wc.</p>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>
            
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="1.0s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-thumb-tack fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Sanitary</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Septic tank, closet jongkok, lantai km/wc keramik.</p>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>

            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="1.0s">
                    <div class="pricing-icon text-center">
                        <center><i class="fa fa-thumb-tack fa-5x" aria-hidden="true" style="color: #00BAFF"></i></center>
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Instalasi</h5>
                        <br>
                        <p class="text" style="text-align: justify;">Air bersih sumur bor, listrik PLN 900 watt.</p>
                        <br>
                    </div>
                </div> <!-- pricing style one -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRINICNG STYLE EIGHT ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8"></div>
                <div class="section-title text-center mt-30 pb-40">
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.0s"><h2><b>Promo Spesial 2021</b></h2></p>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.2s"><h2><b style="color: #00BAFF">DP Rp 500.000</b> <b>Sudah Bisa Dapat Rumah</b></h2></p>
                    <br><br>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.4s"><h2><b>Harga Spesial Hanya</b></h2></p>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.6s"><h2><b style="color: #00BAFF">Rp 150.500.000</b></h2></p>
                    <br><br>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.8s"><h2><b>Cicilan mulai dari</b> <b style="color: #00BAFF">Rp 900.000</b></h2></p>
                    <p class="text wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="2.0s"><h2><b>Proses Cepat dan Bebas Pilih Unit!!!</b></h2></p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== CONTACT TWO PART START ======-->

<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3 class="title">Pesan Sekarang!!!</h3>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-two mt-50 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.2s">
                    <ul class="contact-info">
                        <li>
                            <a href="tel:+6282111833320">
                            <i class="lni-phone-handset"></i>082111833320</a>
                        </li>

                        <li><br></li>

                        <li>
                            <a href="mailto:perumbsindah@gmail.com">
                            <i class="lni-envelope"></i>perumbsindah@gmail.com</a>
                        </li>

                        <li><br></li>

                        <li>
                            <a href="https://g.page/agungpropertyy?share" target="_blank">
                            <i class="lni-money-location"></i>Jl. Sukasari, Sukasari, Kec. Purwasari, Kabupaten Karawang, Jawa Barat 41373</a>
                        </li>

                        <li><br></li>

                        <li>
                        <iframe class="embed-responsive embed-responsive-1by1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.198340817966!2d107.41083371476992!3d-6.368372995391761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69731af4453d21%3A0x91d14073ed4d2849!2sPERUM%20BUMI%20SUKASARI%20INDAH!5e0!3m2!1sid!2sid!4v1618676730061!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
                        </li>
                    </ul>
                </div> <!-- contact two -->
            </div>
            <div class="col-lg-6">
                <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.0s" data-wow-delay="0.5s">
                    <form  id="contact-form" action="{{ route('landingpage-create') }}" method="post">
                        @csrf
                        <div class="form-input mt-15">
                            <label>Nama</label>
                            <div class="input-items default">
                                <input type="nama" placeholder="Nama" name="nama" required>
                                <i class="lni-user"></i>
                            </div>
                        </div> <!-- form input -->
                        <div class="form-input mt-15">
                            <label>No. Handphone / Whatsapp</label>
                            <div class="input-items default">
                                <input type="telp" placeholder="No. Handphone / Whatsapp" name="telp" required>
                                <i class="lni-phone-handset"></i>
                            </div>
                        </div> <!-- form input -->
                        <div class="form-input mt-15">
                            <label>Email</label>
                            <div class="input-items default">
                                <input type="email" placeholder="Email" name="email" required>
                                <i class="lni-envelope"></i>
                            </div>
                        </div> <!-- form input -->
                        <div class="form-input mt-15">
                            <label>Pesan</label>
                            <div class="input-items default">
                                <textarea placeholder="Pesan" name="pesan"></textarea>
                                <i class="lni-pencil-alt"></i>
                            </div>
                        </div> <!-- form input -->
                        <div class="col-12">
                            {!! NoCaptcha::display() !!}

                            @error ('g-recaptcha-response')
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="form-message"></p>
                        <div class="form-input rounded-buttons mt-20">
                            <button type="submit" class="main-btn rounded-three">Submit</button>
                        </div> <!-- form input -->
                    </form>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT TWO PART ENDS ======-->
@endsection
