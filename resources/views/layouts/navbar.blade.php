<script src="https://consent.cookiefirst.com/banner.js" data-cookiefirst-key="713c5bda-ee58-43ca-a6a3-55d5f1df3ca9"></script>
<!-- Preloader Begin -->
<div class='preloader w-100 h-100 position-fixed'>
    <div class="loader">
        <img class="icon"  src="{{asset('/img/preloader.png')}}" alt="">
    </div>
</div>
<!-- Preloader End -->

<!-- Header Begin -->
<header class="header fixed-top">
    <!-- Header Style One Begin -->
    <div class="fixed-top header-main style--one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-8">
                    <!-- Logo Begin -->
                    <div class="logo">
                        <a href="{{route('index',$city_url)}}">
                            <img class="default-logo" src="{{asset('/img/logo.png')}}" data-rjs="1" alt="">
                            <img class="sticky-logo" src="{{asset('/img/logo.png')}}" data-rjs="1" alt="">
                        </a>
                    </div>
                    <!-- Logo End -->
                </div>

                <div class="col-lg-9 col-sm-8 col-4">
                    <!-- Main Menu Begin -->
                    <div class="main-menu d-flex align-items-center justify-content-end">
                        <ul class="nav align-items-center">
                            <li class="current-menu-parent menu-item-has-children" >
                                <li><a href="{{route('index',$city_url)}}">Home</a></li>
                                <li><a href="{{route('datenschutz',$city_url)}}">Datenschutz</a></li>

                            <li><a href="{{route('impressum',$city_url)}}">Impressum</a></li>
                        </ul>
                        <!-- Offcanvas Holder Trigger -->
                        <span class="offcanvas-trigger text-right d-none d-lg-block">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <!-- Offcanvas Trigger End -->
                    </div>
                    <!-- Main Menu ENd -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Style One End -->
</header>
<!-- Header End -->
<!-- Offcanvas Begin -->
<div class="offcanvas-overlay fixed-top w-100 h-100"></div>
    <div class="offcanvas-wrapper bg-white fixed-top h-100">
        <!-- Offcanvas Close Button Begin -->
        <div class="offcanvas-close position-absolute">
            <img src="{{asset('/img/icons/close.svg')}}" class="svg" alt="">
        </div>
        <!-- Offcanvas Close Button End -->

        <!-- Offcanvas Content Begin -->
        <div class="offcanvas-content">
            <!-- About Widget Begin -->
            <div class="widget widget_about">
                <div class="widget-logo">
                    <img src="{{asset('/img/logo.png')}}" data-rjs="1" alt="">
                </div>

                <div class="about-content">
                    <p>Hervorragende App Entwicklung in {{$city}}, iOS, Android, Hybrid und PWA.</p>
                </div>
            </div>
            <!-- About Widget End -->

        
            <!-- Contact Widget Begin -->
            <div class="widget widget_contact_info">
                <!-- Widget Logo Begin -->
                <div class="widget-title">
                    <h4>Kontakt</h4>
                </div>
                <!-- Widget Logo End -->
            
                <!-- Widget Content Begin -->
                <div class="info-content">
                    <div class="single-info">
                        <span>Unsere Büros</span>
                        <p>Nürnberger Straße 46, 90579 Langenzenn, Deutschland</p>
                        <p>401-413, One World West Ambali T junction, Ahmedabad, Indien</p>
                    </div>
                    <div class="single-info">
                        <span>Business Phone</span>
                        <p><a href="tel:+49(0)9101 4789320">+49(0)9101 4789320</a>
                        </p>
                    </div>
                    <div class="single-info">
                        <span>Support mail</span>
                        <p>
                            <a href="mail:hello@tridhya.de">hello@tridhya.de</a>
                        
                        </p>
                    </div>
                </div>
                <!-- Widget Content End -->
            </div>
            <!-- About Widget End -->

            <!-- Offcanvas Button Begin -->
            <div class="offcanvas-btn">
                <a href="{{route('inquiry',$city_url)}}" class="btn"><span>Angebot anfragen</span></a>
            </div>
            <!-- Offcanvas Button End -->
        </div>
        <!-- Offcanvas Content End -->
    </div>
    <!-- Offcanvas End -->