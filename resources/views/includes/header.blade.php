<!--====== NAVBAR PART START ======-->

<section class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="{{ url('landing/assets/images/logo_bsi.png') }}" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
    
    <div id="home" class="slider-area">
        <div class="bd-example">
            <div id="carouselOne" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselOne" data-slide-to="1"></li>
                    <li data-target="#carouselOne" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item bg_cover active" style="background-image: url({{ 'landing/assets/images/header2.png' }})" >
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title" style="color: black"></h2>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- carousel caption -->
                    </div> <!-- carousel-item -->

                    <div class="carousel-item bg_cover" style="background-image: url({{ 'landing/assets/images/header2.png' }})">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title" style="color: black"></h2>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- carousel caption -->
                    </div> <!-- carousel-item -->

                    <div class="carousel-item bg_cover" style="background-image: url({{ 'landing/assets/images/header2.png' }})">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title" style="color: black"></h2>
                                    </div>
                                </div> <!-- row -->
                            </div> <!-- container -->
                        </div> <!-- carousel caption -->
                    </div> <!-- carousel-item -->
                </div> <!-- carousel-inner -->

                <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                    <i class="lni-arrow-left-circle"></i>
                </a>

                <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                    <i class="lni-arrow-right-circle"></i>
                </a>
            </div> <!-- carousel -->
        </div> <!-- bd-example -->
    </div>

</section>

<!--====== NAVBAR PART ENDS ======-->