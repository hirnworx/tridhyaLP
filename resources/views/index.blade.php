@include('layouts.header')
@include('layouts.navbar')
 <!-- Slider Begin -->
    <section class="banner section-pattern" data-bg-img="{{asset('/img/section-pattern/slider-pattern.png')}}">
        <!-- Banner Slider Begin -->
        <div class="banner-slider owl-carousel d-flex align-items-center justify-content-center" data-owl-animate-in="fadeIn" data-owl-animate-Out="fadeOut" data-owl-autoplay="false" data-owl-dots="true">
            <!-- Single Slide Begin -->
            <div class="single-banner-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Banner Content Begin -->
                            <div class="banner-content">
                                <h1>hervorragende <br>
                                    <span>App Entwicklung</span>  <br>
                                    in {{$city}}</h1>
                                <p>Ob iOS, Android oder Flutter. Wir sind Die Agentur für kreative und individuelle Mobile Apps und E-Commerce Apps in der Region {{$city}}.</p>
                                <a href="{{route('inquiry',$city_url)}}" class="banner-btn btn"><span>Kostenloses Angebot anfragen</span></a>
                            </div>
                            <!-- Banner Content End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Banner Content Begin -->
                            <div class="banner-image mt-50 mt-lg-0 text-center text-lg-right">
                                <img src="{{asset('/img/mockup12.png')}}" data-rjs="2" alt="">
                            </div>
                            <!-- Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide End -->
    
            <!-- Single Slide Begin -->
            <div class="single-banner-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Banner Content Begin -->
                            <div class="banner-content">
                                <h1>iOS & Android <span>Apps</span> <br>
                                    in {{$city}} entwickeln</h1>
                                <p>Entwickeln Sie einfach und effizient Ihre eigene Mobile-App mit uns. Fragen Sie doch einfach an!</p>
                                <a href="{{route('inquiry',$city_url)}}" class="banner-btn btn"><span>Kostenloses Angebot anfragen</span></a>
                            </div>
                            <!-- Banner Content End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Banner Content Begin -->
                            <div class="banner-image mt-50 mt-lg-0 text-center text-lg-right">
                                <img src="{{asset('/img/mockup12.png')}}" data-rjs="2" alt="">
                            </div>
                            <!-- Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide End -->
        </div>
        <!-- Banner Slider End -->
    </section>
    <!-- Slider End -->
    <!-- Feature Begin -->
    <section class="pt-120 pb-90 section-pattern" data-bg-img="{{asset('/img/section-pattern/feature-pattern.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                       
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3><i class="fa fa-apple" aria-hidden="true"></i><br><br>
                                Native iOS  </h3>
                            <p>Wir entwickleln herrvoragende Apps für Iphones und Ipads</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                       
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3><i class="fa fa-android" aria-hidden="true"></i><br><br>
                                Native Android</h3>
                            <p>Ihre Idee auf allen Android Geräten. Nutzen Sie diese Reichweite</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Feature Begin -->
                    <div class="single-feature text-center">
                        <!-- Feature Image Begin -->
                        
                        <!-- Feature Image End -->

                        <!-- Feature Content Begin -->
                        <div class="content">
                            <h3><i class="fa fa-flag" aria-hidden="true"></i><br><br>
                                Hybrid Apps</h3>
                            <p>Nur ein Programmcode für Alle Endgeräte.</p>
                        </div>
                        <!-- Feature Content End -->
                    </div>
                    <!-- Single Feature End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <!-- About Begin -->
    <section class="pt-120 pb-120 section-pattern ov-hidden" data-bg-img="{{asset('/img/section-pattern/about-pattern.png')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Begin -->
                    <div class="section-title">
                        <h3>Die Agentur für App Entwicklung in {{$city}}</h3>
                        <h2>Native Apps <br>
                        Für Android und iOS<br>
                        die Vorteile</h2>
                        <p>Native Apps für iOS und Android zu entwickeln bedeutet immer den doppelten Aufwand das die App in verschiedenen Programmcodes zwei mal geschrieben werden muss. Hier erfahren Sie warum sich das oft trotzdem lohnt. </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Tabs Begin -->
                    <div class="about-nav-tab">
                        <!-- Nav Tabs Begin -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-items">
                                <a class="nav-link active" data-toggle="tab" href="#mission" role="tab" aria-selected="true">iOS</a>
                            </li>
                            <li class="nav-items">
                                <a class="nav-link" data-toggle="tab" href="#vission" role="tab" aria-selected="false">Android</a>
                            </li>
                        </ul>
                        <!-- Nav Tabs End -->

                        <!-- Tab Contents Begin -->
                        <div class="tab-content">
                            <!-- Mission Tab Begin -->
                            <div class="tab-pane fade show active" id="mission" role="tabpanel">
                                <p>iOS besitzt ein geschlossenes App-Enviroment. Alle Apps müssen erst von Apple verifiziert werden, bevor sie installierbar sind. 
                                    Um auf Core-Funktionalitäten wie Sensoren, GPS und den neuen LiDAR Scanner zuzugreifen entfiehlt sich eine Native iOS App.
                                </p> 

                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Zugriff auf alle Funktionen des Apple-Gerätes</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Bessere Akzeptanz im App-Store</li>
                                </ul>

                                <a href="#" class="btn"><span>Mehr zum Thema iOS</span></a>
                            </div>
                            <!-- Mission Tab End -->

                            <!-- Vission Tab Begin -->
                            <div class="tab-pane fade" id="vission" role="tabpanel">
                                <p>Android bietet im gegensatz zu iOS eine offene Systemarchitektur. Es fällt hier deutlich leichter Core-Funktionen wie GPS, Sensoric etc. 
                                    zu integrieren. Hier liegen die Vorteile einer Nativen Adroid App gegenüber einer Hybrid App eher im Bereich Performance.</p> 

                                <ul class="list-unstyled list-check">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Schnellere Apps durch Native Entwicklung</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Noch einfacherer Zugriff auf alle Funktionen des Devices</li>
                                    <!-- <li><i class="fa fa-check" aria-hidden="true"></i> Customer dossier</li> -->
                                </ul>

                                <a href="#" class="btn"><span>Mehr zum Thema Android</span></a>
                            </div>
                            <!-- Vission Tab End -->
                        </div>
                        <!-- Tab Contents End -->
                    </div>
                    <!-- About Tabs End -->
                </div>
                <div class="col-lg-5 video-area mt-50 mt-lg-0">
                    <img src="{{asset('/img/ct1.png')}}" data-rjs="1" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Work Process Begin -->
    <section class="pt-120 pb-70 section-pattern" data-bg-img="{{asset('/img/section-pattern/work-process-pattern.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>App Programmieren in {{$city}}</h3>
                        <h2>Sauberes Projektmanagement garantiert einen reibungslosen Ablauf</h2>
                        <p>Einfach mal anfangen ist zwar eine schöne Floskel aber im Bereich App Entwicklung kommt man damit nicht besoders weit. Um unsere App Projekte zuverlässig und termingetreu umzusetzen setzen wir auf agiles Projektmanagement. 
                            Dies sorgt dafür dass wir Ihren Projektfortschritt immer im Blick behalten.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            
            <div class="row process-bg" data-bg-img="{{asset('/img/process_shape.png')}}">
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{asset('/img/planning.png')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Planung</h3>
                            <p>Wir eintwickeln in enger Absprache mit Ihnen eine Strategie um Ihr App Projekt umzusetzen</p>
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{asset('/img/designing.png')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Design</h3>
                            <p>Unsere erfahrenen UX/UI Designer erstellen Ihnen ein Mockup für Ihre App.</p>
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{asset('/img/dev.png')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Entwicklung</h3>
                            <p>Mit unserem Team aus über 300 App-Entwicklern an unserem Standort in Indien setzen wir Ihre App zielgerichtet um.</p>
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
                <div class="col-lg-3 col-sm-6 single-process-wrapper">
                    <!-- Single Work Process Begin -->
                    <div class="single-process text-center">
                        <!-- Image Begin -->
                        <div class="image">
                            <img src="{{asset('/img/roll.png')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Image End -->

                        <!-- Content Begin -->
                        <div class="content">
                            <h3>Roll-Out</h3>
                            <p>Ihre App ist nun fertig. Wir laden Sie in den entsprechenden App-Store hoch um sie zugänglich zu machen.</p>
                        </div>
                        <!-- Content End -->
                    </div>
                    <!-- Single Work Process End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process End -->

    <!-- Service Begin -->
    <section class="pt-120 pb-120 section-pattern" data-bg-img="{{asset('/img/section-pattern/service-pattern.png')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Begin -->
                    <div class="section-title">
                        <h3>Wir bieten</h3>
                        <h2>App Entwicklung <br>
                        in {{$city}} <br>
                       Preiswert und Zuverlässig</h2>
                        <p>Ja wir sind besonders! An unserem Standort in {{$city}} bilden wir die Schnittstelle zwischen Kunden und Entwicklern.
                            Alle unsere Kundenbetreuer und Projektmanager sind lokal verfügbar. Alles was die Technik und Entwicklung anbelangt,
                            wird von unseren über 500 Developern in Ahmedabad, Indien umgesetzt. So garantieren wir einerseits bezahlbare App Entwicklung und zugleich höchste Qualitätsstandarts.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Button Begin -->
                    <a href="#" class="btn"><span>Mehr zu Tridhya</span></a>
                    <!-- Button End -->
                </div>

                <div class="col-lg-6">
                    <div class="row mt-40 mt-lg-0">
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="{{asset('/img/icons/service-1.png')}}" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Eigene Ansprechpartner</h4>
                                    <p>Ihnen steht immer ein eigener Ansprechpartner vor Ort zur Seite</p>
                                    <a href="#" class="btn-inline">Mehr Infos</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="{{asset('/img/icons/service-2.png')}}" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Erstklassige App-Entwickler</h4>
                                    <p> Alle unsre Entwickler haben einen Studienabschluss in Computer Science</p>
                                    <a href="#" class="btn-inline">Mehr Infos</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="{{asset('/img/icons/service-3.png')}}" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Projektbezogene Abrechnung</h4>
                                    <p>Wir vereinbaren einen Scope of Work und rechnen Projektbezogen ab.</p>
                                    <a href="#" class="btn-inline">Mehr Infos</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                        <div class="col-sm-6 single-service-wrapper">
                            <!-- Single Service Begin -->
                            <div class="single-service text-center">
                                <!-- Icon Begin -->
                                <div class="icon">
                                    <img src="{{asset('/img/icons/service-4.png')}}" data-rjs="2" alt="">
                                </div>
                                <!-- Icon End  -->

                                <!-- Content Begin -->
                                <div class="content">
                                    <h4>Dedicated Developer</h4>
                                    <p>Für Größere Projekte stellen wir Ihnen exklusiv einen eigenen Entwickler.</p>
                                    <a href="#" class="btn-inline">Mehr Infos</a>
                                </div>
                                <!-- Content End -->
                            </div>
                            <!-- Single Service End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Counter Begin -->
    <section class="pt-120 pb-70 gradient-bg">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>15</span></h2>
                        <p>Jahre Erfahrung</p>
                    </div>
                </div>
                <!-- End Single Counter -->
    
                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>3000</span>+</h2>
                        <p>zufriedene Kunden</p>
                    </div>
                </div>
                <!-- End Single Counter -->
    
                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>10</span>k+</h2>
                        <p>Projekte</p>
                    </div>
                </div>
                <!-- End Single Counter -->
    
                <!-- Single Counter -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center text-white">
                        <h2 class="count"><span>520</span>+</h2>
                        <p>Entwickler</p>
                    </div>
                </div>
                <!-- End Single Counter -->
            </div>
        </div>
    </section>
    <!-- Counter End -->

    <!-- Pricing Plan Begin -->
    <section class="pt-120 pb-120 section-pattern" data-bg-img="{{asset('/img/section-pattern/price-pattern.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>Abrechnungsmodelle</h3>
                        <h2>Verschiedene Abrechnungmodelle die zu Ihnen passen</h2>
                        <p>Projektbasierte Abrechnung ist nur eine mögliche Art und Weise ihr App-Projekt anzugehen. Ob Dedicated oder Stundenbasiert. wir finden das richtige Modell für Sie.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <!-- Pricing NavTab Begin -->
            <div class="pricing-navtab">
                <!-- Pricing Nav Begin -->
                <ul class="row nav nav-tabs" role="tablist">
                    <!-- Single Nav Begin -->
                    <li class="nav-item col-lg-3 col-sm-6">
                        <a href="#personal" class="nav-link text-center active" data-toggle="tab" role="tab">
                        <h4>Kleine Projekte</h4>
                        <h2>Stundenbasiert</h2>
                    </a>
                    </li>
                    
                    <!-- Single Nav End -->
                
                    <!-- Single Nav Begin -->
                    <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#startup" class="nav-link text-center" data-toggle="tab" role="tab">
                        <h4>Mittlere Projekte</h4>
                        <h2>Projektbasiert</h2>
                    </a>
                    </li>
                    <!-- Single Nav End -->

                    <!-- Single Nav Begin -->
                    <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#business" class="nav-link text-center" data-toggle="tab" role="tab">
                        <h4>Große Projekte</h4>
                        <h2>Monatlich</h2>
                    </a>
                    </li>
                    <!-- Single Nav End -->
                
                    <!-- Single Nav Begin -->
                    <li class="nav-item col-lg-3 col-sm-6">
                    <a href="#entrepreneur" class="nav-link text-center" data-toggle="tab" role="tab">
                        <h4>Agenturen</h4>
                        <h2>Dedicated</h2>
                    </a>
                    </li>
                    <!-- Single Nav End -->
                   
                </ul>
                <!-- Pricing Nav End -->

                <!-- Pricing Tab Content Begin -->
                <div class="tab-content">
                    <!-- Single Content Begin -->
                    <div class="tab-pane fadeInUp animated show active" id="personal" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text">
                                    <h3>Worum es hier geht? </h3>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie bezahlen nur die tatsächlichen Stunden </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie erhalten einen deutschen Projektmanager</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Wir vereinbaren einen individuellen Stundensatz</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Rentiert sich für Projekte unter 50 Stunden</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Ein Design kann optional erstellt werden</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Wir rechnen Monatlich die Arbeitsstunden mir Ihnen ab.</li>
                                    </ul>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text mt-50 mt-lg-0">
                                    <h3>Was Sie davon haben? -</h3>
                                    <p>Jedes Abrechnungsmodell hat seine Vor- und Nachteile. Hier erfahren Sie welche.</p>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Zahlen Sie nur die Produktivstunden </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Für größere Projekte können wir Ihnen hier keinen reduzierten Stundensatz anbieten.</li>
                                    </ul>
                                    <a href="{{route('inquiry',$city_url)}}" class="btn"><span>Jetzt anfragen</span></a>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Content End -->

                    <!-- Single Content Begin -->
                    <div class="tab-pane fadeInUp animated" id="startup" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text">
                                    <h3>Worum es hier geht?</h3>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Wir setzen Ihr Projekt zum Fixpreis um</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie haben kalkulationssicherheit zur Budgetplanung</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Rentiert sich für Projekte von 50-300 Stunden</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Ein Design kann optional erstellt werden</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie erhalten einen festen deutschen Asprechpartner</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Das Risiko für eventuelle Kalkulationsfehler tragen wir </li>
                                    </ul>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text mt-50 mt-lg-0">
                                    <h3>Was Sie davon haben? -</h3>
                                    <p>Maximale Planungssicherheit und kein Kostenrisiko.
                                    </p>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Hierfür bieten wir keine reduzierten Stundensätze</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Ihr Projekt wird zum Fixpreis umgesetz. Komme was wolle.</li>
                                    </ul>
                                    <a href="{{route('inquiry',$city_url)}}" class="btn"><span>Jetzt anfragen</span></a>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Content End -->

                    <!-- Single Content Begin -->
                    <div class="tab-pane fadeInUp animated" id="business" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text">
                                    <h3>Worum es hier geht? </h3>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie erhalten einen eigenen nur für Sie zuständigen Entwickler</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie erhalten einen fixen deutssprachigen Projektmanager.</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Wir rechnen Ihren Entwickler monatlich mit Ihnen ab.</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> der Projektmanager kostet Sie 25% zum Entwicklerpreis</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie erhalten ein detailiertes Reporting über die Entwicklerstunden</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Falls gewünscht erhalten Sie direkten Kontakt zu Ihrem Entwickler</li>
                                    </ul>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text mt-50 mt-lg-0">
                                    <h3>Was Sie davon haben? -</h3>
                                    <p>Einen eigenen Entwickler zum Montatlichen Fixpreis. Setzen Sie größere Projekte zum reduzierten Preis um
                                    </p>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Ihr Entwickler arbeitet ausschließlich an Ihrem Projekt</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Sie profitieren von reduzierten Studensätzen</li>
                                    </ul>
                                    <a href="{{route('inquiry',$city_url)}}" class="btn"><span>Jetzt anfragen</span></a>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Content End -->

                    <!-- Single Content Begin -->
                    <div class="tab-pane fadeInUp animated" id="entrepreneur" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text">
                                    <h3>Unser Agenturmodell</h3>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Kostengünstige Entwickler mit Direktkontakt</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Abrechnung über eine deutsche GmbH</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Vergünstige an Vertragslaufzeit gebundene Tarife</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Hohe Expretise in Native iOS, Andoid, Flutter und Ionic </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Optional deutssprachigen Projektmanager vor Ort</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> It Outsourcing mit dem benefit eines deutschen Partners</li>
                                    </ul>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Tab Pane Text Begin -->
                                <div class="tab-pane-text mt-50 mt-lg-0">
                                    <h3>Was Sie davon haben? -</h3>
                                    <p>Hohe flexibilität um Personalspitzen zu decken. Sie profitieren von der Währungsdifferenz unserer Indischen Niederlassung.
                                    </p>
                                    <ul class="list-unstyled list-check">
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Buchen Sie Ihre Entwickler für 3, 6 oder 12 Monate</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> Profitieren Sie von unseren Agenturkonditionen und unserer Kultruellen Expertise im Umgang mit indischen Entwicklern.</li>
                                    </ul>
                                    <a href="{{route('inquiry',$city_url)}}" class="btn"><span>jetzt Anfragen</span></a>
                                </div>
                                <!-- Tab Pane Text End -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Content End -->
                </div>
                <!-- Pricing Tab Content End -->
            </div>
            <!-- Pricing NavTab End -->
        </div>
    </section>
    <!-- Pricing Plan End -->

    <!-- Testimonial Begin -->
    <section class="pt-120 pb-120 section-pattern" data-bg-img="{{asset('/img/section-pattern/testimonial-pattern.png')}}"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>Gute Referenzen sind die Basis jeder Agentur</h3>
                        <h2>Was unsere Kunden von uns denken</h2>
                        <p>Wir können viel erzählen wenn der Tag lang ist. Vertrauen Sie auf die Erfahrungen unserer Kunden in sachen App Entwicklung in {{$city}}</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <!-- Testimonial Slider Begin -->
            <div class="testimonial-slider owl-carousel" data-owl-nav="true" data-owl-autoplay="false" data-owl-animate-Out="fadeOut" data-owl-animate-in="fadeIn" data-owl-margin="3">
                <!-- Single Testimonial Begin -->
                <div class="single-testimonial-slide">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <!-- Testimonial Image Begin -->
                            <div class="testimonial-image mb-50 mb-md-0">
                                <img src="{{asset('/img/c1.jpg')}}" data-rjs="2" alt="">
                            </div>
                            <!-- Testimonial Image End -->
                        </div>

                        <div class="col-md-7">
                            <!-- Testimonial Content Begin -->
                            <div class="testimonial-content">
                                <p> 
                                    Wir setzen 90% unseres Gesamtumsatzes in unserem Onlineshop um. In einer Branche in der E-Commerce noch keine allzu Große Rolle Spielt. Ich bin Teilhaber von Tridhya und gleichzeit Geschäftsführer der FeNau GmbH. Das heißt dass ich alle Hürden gut kenne. 
                                    </p>

                                <h4>Thomas Nautsch</h4>
                                <span>FeNau GmbH</span>
                            </div>
                            <!-- Testimonial Content End -->
                        </div>
                    </div>
                </div>
                <!-- Single Testimonial End -->

                <!-- Single Testimonial Begin -->
                <div class="single-testimonial-slide">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <!-- Testimonial Image Begin -->
                            <div class="testimonial-image mb-50 mb-md-0">
                                <img src="{{asset('/img/c2.jpg')}}" data-rjs="2" alt="">
                            </div>
                            <!-- Testimonial Image End -->
                        </div>

                        <div class="col-md-7">
                            <!-- Testimonial Content Begin -->
                            <div class="testimonial-content">
                                <p> 
                                    Wir versenden am Tag über 2500 Pakete. Deshalb war es uns sehr wichtig das unsere App reibungslos Funktioniert. Tridya und vor allem Herr De Matteo hat sich hervorragend um uns gekümmert. Hierfür sind wir sehr dankbar! 
                                    </p>

                                <h4>Alexander Drobny</h4>
                                <span>AD-Tuning GmbH</span>
                            </div>
                            <!-- Testimonial Content End -->
                        </div>
                    </div>
                </div>
                <!-- Single Testimonial End -->

                <!-- Single Testimonial Begin -->
                <div class="single-testimonial-slide">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <!-- Testimonial Image Begin -->
                            <div class="testimonial-image mb-50 mb-md-0">
                                <img src="{{asset('/img/c3.jpg')}}" data-rjs="2" alt="">
                            </div>
                            <!-- Testimonial Image End -->
                        </div>

                        <div class="col-md-7">
                            <!-- Testimonial Content Begin -->
                            <div class="testimonial-content">
                                <p> 
                                    In unserer Branche geht es immer darum individuelle Lösungen zur Fahrzeugsuche in unserer App zu haben. Trhidya hat uns hierfür einie Lösung entwickelt welche unseren Alltag erhelblich einfacher macht.  
                                    </p>

                                <h4>Thilo Manhammer</h4>
                                <span>Manhammer GmbH</span>
                            </div>
                            <!-- Testimonial Content End -->
                        </div>
                    </div>
                </div>
                <!-- Single Testimonial End -->
            </div>
            <!-- Testimonial Slider End -->
        </div>
    </section>
    <!-- Testimonial End -->

    

    <!-- Team Begin -->
    <section class="pt-120 pb-70 section-pattern" data-bg-img="{{asset('/img/section-pattern/testimonial-pattern.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Begin -->
                    <div class="section-title text-center">
                        <h3>Hohe Expertise in {{$city}} und Indien</h3>
                        <h2>Unser Leaderboard</h2>
                        <p>Erfahrung ist durch nichts zu ersetzen. Mit 10+ Jahren Erfahrung in der IT-Branche sind wir experten in unserem jeweilgen Tätigkeitsfeld.

                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Team Begin -->
                    <div class="single-team-member">
                        <!-- Team Image Begin -->
                        <div class="image position-relative">
                            <img src="{{asset('/img/shapes/team.svg')}}" class="svg" alt="">
                            <img src="{{asset('/img/ddm.jpg')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Team Image End -->
                        
                        <!-- Team Info Begin -->
                        <div class="team-info">
                            <div class="info-front text-center">
                                <h4>David De Matteo</h4>
                                <p>CEO</p>
                            </div>
                            
                            <div class="info-back">
                                <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                
                                   
                                    <li>
                                        <a href="https://www.linkedin.com/in/david-de-matteo-7700a7a3/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/david_dematteo"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Info End -->
                    </div>
                    <!-- Single Team End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Team Begin -->
                    <div class="single-team-member">
                        <!-- Team Image Begin -->
                        <div class="image position-relative">
                            <img src="{{asset('/img/shapes/team.svg')}}" class="svg" alt="">
                            <img src="{{asset('/img/tn.png')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Team Image End -->
                        
                        <!-- Team Info Begin -->
                        <div class="team-info">
                            <div class="info-front text-center">
                                <h4>Thomas Nautsch</h4>
                                <p>CEO</p>
                            </div>
                            
                            <div class="info-back">
                                <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                   
                                    <li>
                                        <a href="https://www.linkedin.com/in/thomas-nautsch-782482200"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                        <!-- Team Info End -->
                        
                    </div>
                    <!-- Single Team End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Team Begin -->
                    <div class="single-team-member">
                        <!-- Team Image Begin -->
                        <div class="image position-relative">
                            <img src="{{asset('/img/shapes/team.svg')}}" class="svg" alt="">
                            <img src="{{asset('/img/df.jpg')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Team Image End -->
                        
                        <!-- Team Info Begin -->
                        <div class="team-info">
                            <div class="info-front text-center">
                                <h4>Daniel Frisch</h4>
                                <p>Salesmanager</p>
                            </div>
                            
                            <div class="info-back">
                                <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                    
                                    <li>
                                        <a href="https://www.linkedin.com/in/daniel-frisch-771301224"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>
                        <!-- Team Info End -->
                        
                    </div>
                    <!-- Single Team End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Team Begin -->
                    <div class="single-team-member">
                        <!-- Team Image Begin -->
                        <div class="image position-relative">
                           <img src="{{asset('/img/shapes/team.svg')}}" class="svg" alt="">
                            <img src="{{asset('/img/t1.jpg')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Team Image End -->
                        
                        <!-- Team Info Begin -->
                        <div class="team-info">
                            <div class="info-front text-center">
                                <h4>Ramesh Marand</h4>
                                <p>Board Member</p>
                            </div>
                            
                            <div class="info-back">
                                <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                   
                                    <li>
                                        <a href="https://www.linkedin.com/in/rameshahir"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- Team Info End -->
                        
                    </div>
                    <!-- Single Team End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Team Begin -->
                    <div class="single-team-member">
                        <!-- Team Image Begin -->
                        <div class="image position-relative">
                            <img src="{{asset('/img/shapes/team.svg')}}" class="svg" alt="">
                            <img src="{{asset('/img/t2.jpg')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Team Image End -->
                        
                        <!-- Team Info Begin -->
                        <div class="team-info">
                            <div class="info-front text-center">
                                <h4>Vinay Dangar</h4>
                                <p>Board Member</p>
                            </div>
                            
                            <div class="info-back">
                                <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                   
                                    <li>
                                        <a href="https://www.linkedin.com/in/vinay-dangar-343a5354"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                        <!-- Team Info End -->
                        
                    </div>
                    <!-- Single Team End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Team Begin -->
                    <div class="single-team-member">
                        <!-- Team Image Begin -->
                        <div class="image position-relative">
                            <img src="{{asset('/img/shapes/team.svg')}}" class="svg" alt="">
                            <img src="{{asset('/img/t3.jpg')}}" data-rjs="2" alt="">
                        </div>
                        <!-- Team Image End -->
                        
                        <!-- Team Info Begin -->
                        <div class="team-info">
                            <div class="info-front text-center">
                                <h4>Sagar Shah</h4>
                                <p>Head of Development</p>
                            </div>
                            
                            <div class="info-back">
                                <ul class="social_icon_list list-inline text-center w-100 d-flex justify-content-around">
                                    
                                    <li>
                                        <a href="https://www.linkedin.com/in/sagar-shah-40a17811"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- Team Info End -->
                        
                    </div>
                    <!-- Single Team End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->

    <!-- CTA Begin -->
    <section class="gradient-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- CTA Content Begin -->
                    <div class="cta-content text-center text-white">
                        <h2>Full Service App Entwicklung in {{$city}} von A-Z<br>
                        Wir Entwickeln iOS, Android und Hybridapps</h2>
                        <p>Lassen Sie sich unverbindlich von uns beraten und erhalten Sie ein kostenfreies Angebot für Ihr Projekt. Budgetoptimiert, in Time und zuverlässig.</p>
                        <a href="{{route('inquiry',$city_url)}}" class="btn btn-white"><span>Angebot anfordern</span></a>
                    </div>
                    <!-- CTA Content End -->
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->
@include('layouts.footer')

