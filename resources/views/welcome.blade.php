<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Softcenter - index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
	<style>
		#hero {
			background-image:
			linear-gradient(to bottom, #005aea94 , #ffff),
			url({{ url("images/bg.jpg") }});
		}
	</style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Softcenter.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="#hero" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="#criteria" class="nav-link">Application Criteria</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{ route('apply') }}" class="nav-link">Apply</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div id="hero" class="hero-wrap" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <span style="color:white">ICT Business Acceleration Programme</span></h1>
            <p style="color:black" class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span style="color:white" class="icon-calendar mr-2"></span>7 February 2023 - Untill Application</p>
            <div id="timer" class="d-flex">
				<div style="color:black" class="time" id="days"></div>
				<div style="color:black" class="time pl-3" id="hours"></div>
				<div style="color:black" class="time pl-3" id="minutes"></div>
				<div style="color:black" class="time pl-3" id="seconds"></div>
			</div>
			<a href="https://crdbbank.co.tz/en" target="blank"><img src='{{ url("images/sponsors/crdb.png") }}' width="30%"></a>
			<a href="https://www.ictc.go.tz/" target="blank"><img src='{{ url("images/sponsors/ict.png") }}' width="30%"></a>
			<a href="https://crdbbank.co.tz/en" target="blank"><img src='{{ url("images/sponsors/mbeju.png") }}' width="30%"></a>
          </div>
          <div class="col-lg-2 col">
		  </div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
          	<form action="#" class="request-form ftco-animate">
          		<h2>Call For Application</h2>
	    				<div class="form-group">
	    					<!-- <input type="text" class="form-control" placeholder="Enter your Name"> -->
	    				</div>
	    				<div class="form-group">
	    					<!-- <input type="text" class="form-control" placeholder="Enter your Email"> -->
	    				</div>
    					<div class="form-group">
	    					<!-- <input type="text" class="form-control" placeholder="Enter your Phone"> -->
	    				</div>
	    				<div class="form-group">
								<div class="checkbox">
								   <label>The <b style="color: blue;">ICT Commission's Softcenter</b> in partnership with <b style="color: blue;">CRDB Foundation</b> is pleased to invite teams of innovators to join the ICT Business Acceleration Programme which is aim to promote the local digital innovation industry.</label>
								</div>
							</div>
	            <div class="form-group">
	              <a href="{{ route('apply') }}"><input type="" value="Apply now" class="btn btn-primary py-3 px-4"></a>
	            </div>
	    	</form>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-placeholder"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">10 TECH START-UPS</h3>
                <!-- <p>	If your selected for the Accelerator, you will be part of 10 TEHC START-UPS that will receive maxmum grant funding of TZS50,000,000/=</p> -->
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-world"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">OFFICE SPACES WITH FACILITIES</h3>
                <!-- <p>	If your selected for the Accelerator, you will be part of 10 TEHC START-UPS that will receive maxmum grant funding of TZS50,000,000/=</p> -->
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-hotel"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">PRODUCT DEVELOPMENT AND MARKET VALIDATION</h3>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-cooking"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">PRODUCT EXHIBITION AND PROMOTION</h3>
                <p></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
   	
	<section id="about" class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
				</div>
				<div class="col-md-7 wrap-about py-md-5 ftco-animate">
			<div class="heading-section mb-5 pt-5 pl-md-5">
			<div class="pr-md-5 mr-md-5">
				<h2 class="mb-4">About the Programme</h2>
			</div>

			<p>The Programme seeks to identfy and select from a diverse group of ambitious, entrepreneurial-minded innovators building products, services and companies that are disruptive and transformative in nature, and that can harness the power of the Digital Economy to drive Tanzanian's entry into the Forth Industrial Revolution. </p>
			<p>Through this programme, Digital Starts-Ups will be paired with an extensive network of mentors, industry experts and leaders, educated in product design, service roll-out and implementation, business modelling and mass distribution channels, will be provided access to institutional and corporate partners including an opportunity to partner with CRDB Bank's Digital Innovations services, and free working space.</p>
			<p>This will also provide an opportunity for any of the Start-Ups that qualify, to be part of the Pilot Programme for Tanzania's Regulatory Sandbox, where they will be taken through the regulatory and compliance requirements of their particular product or service, among other elements of an extensive market-enty programme designed specifically for the Tanzanian and African marketplace.</p>
			<p><a href="{{ route('apply') }}" class="btn btn-primary">Apply now</a></p>
			</div>
				</div>
			</div>
		</div>
	</section>
	
    <section id="criteria" class="ftco-section">
      <div class="container">
        <div class="ftco-schedule">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Application Criterias</h2>
          </div>
        </div>
		<div class="ftco-schedule">
			<div class="row">
				<div class="col-md-3 nav-link-wrap text-center text-md-right">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">All Start-Ups <span>must have these attributes</span></a>

					<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Starts-Ups with the following <span>will have added advantage</span></a>

					<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Among other things <span>Start-Ups will judged based on</span></a>

					</div>
				</div>
				<div class="col-md-9 tab-wrap">
					
					<div class="tab-content" id="v-pills-tabContent">

					<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-16.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Business must be registered and operating in Tanzania, targeting the local and/ or international market.</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">At least one Founder, owning <b>not less than 20%</b> of issued shares, must be between the ages of 18-35 years old.</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Majority women-owned businesses are highly encouraged to apply.</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Primary offices based in Dar Es Salaam, Tanzania your Start-Up must be</a></h2>
								<p>i. <b>Prototype</b>: MVP (Minimum Viable Product), Pilot or Post-Revenue Stage</p>
								<p>ii. <b>For-Profit Enterprise</b>: Sustainable revenue generating model</p>
								<p>iii. <b>Innovative</b>: Launching a completely new product or service, or a new way of providing an existing product or service.</p>
								<p>iv. <b>Commercially and Socially Impactful</b>: Adequately solves the problem or challenge it is aimed at, and aligns with at least one of Sustainable Development Goals (SDGs)</p>
								<p>v. <b>Scaleable</b>: Can be easly and quickly remodelled/replicated to be made available in other regions of Tanzania, or possess enough scalability to become Pan-African.</p>
								<p>vi. <b>Business Case</b>: Must target a wide section of the population or be able to demonstrate a sustainable business model and viable market adoption.</p>
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Minimum Viable Product (MVP) with initial user testing/demonstrable Prototype</a></h2>
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">A committed and competent team in place with more than one Founder</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Strong business case and a clear path to market or clear strategy for market-entry</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">A clear defined and well understood business model</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">USSD-enabled, use of advanced digital technologies as an implementation tool or channel of delivery</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Innovation and disruptiveness : How are you transforming the social or economic landscape in Tanzania and Africa through your solution?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Team : Mix of team members and ability to achieve excellence in the market?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Traction : Proof of success, milestones, and traction. What have you achieved so far?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Impact and Scale : Potential social and commercial impact, scalability and likelihood of your solution working beyond your home market, and throught the rest of Africa?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Sustainability : Business model and Sustainability. How will it make money?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">Technology : Technological or digital component and tools used to solve the problem. How much of a factor is technology in the solution?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h2><a href="#">USP : Unique Selling Proposition or X Factor. Why is your Start-Up unique or great? How easy is it for others to replicate your solution and enter your market?</a></h2>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
      </div>
    </section>

    <footer id="contact" class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">SOFTCENTER.</h2>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="https://ictc.go.tz/" class="py-2 d-block">ICT COMMISSION</a></li>
                <li><a href="https://mawasiliano.go.tz/" class="py-2 d-block">MAWASILIANO</a></li>
                <li><a href="https://tcra.go.tz/" class="py-2 d-block">TCRA</a></li>
                <li><a href="https://taic.ictc.go.tz/" class="py-2 d-block">TAIC</a></li>
				<li><a href="https://iprs.ictc.go.tz/index.php/login" class="py-2 d-block">IPRS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> 14 Jamhuri St, Dar es Salaam</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+255 7368 48444</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@ictc.go.tz <br />dg@ictc.go.tz</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="www.ictc.go.tz" target="blank">ICT COMMISIION</a>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('js/aos.js') }}"></script>
  <script src="{{ url('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('js/google-map.js') }}"></script>
  <script src="{{ url('js/main.js') }}"></script>
    
  </body>
</html>
<!-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> -->