@include('inquiry.header')
 <nav>
		<ul class="cd-primary-nav">
			<li><a href="https://tridhyatech.de" class="animated_link">Home</a></li>
			<li><a href="https://tridhya.de" class="animated_link">mehr über Tridhya</a></li>
			<li><a href="https://tridhyatech.de/impressum" class="animated_link">Impressum</a></li>
			<li><a href="https://tridhyatech.de/datenschutz" class="animated_link">Datenschutz</a></li>
		</ul>
	</nav>
	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper bg_spa">
					<div class="wrapper">
						<a href="https://tridhyatech.de" id="logo"><img src="{{asset('assets/img/logo.svg')}}" alt="" width="70" height="70"></a>
						<!-- /social -->
						<div class="left_title">
							<h3>Kostenfreies Angebot anfordern</h3>
						</div>
					</div>
				</div>
				<!--/content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right padding">
                <div id="wizard_container">
                    <div id="middle-wizard">
                          <div class="step">
                               <h3 class="main_question1"><span>Vielen Dank für Ihre Anfrage</span>Wir melden und zeitnah bei Ihnen.</h3>
                          </div>
                      </div>
                </div>
            </div> 
               <!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->
@include('inquiry.footer')