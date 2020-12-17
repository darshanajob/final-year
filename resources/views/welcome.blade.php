<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="Val/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Val/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="Val/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="Val/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="Val/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="Val/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="Val/css/flexslider.css" rel="stylesheet" />
    <link href="Val/css/animate.css" rel="stylesheet" />
    <link href="Val/css/style.css" rel="stylesheet">
    <link href="Val/color/default.css" rel="stylesheet">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- page loader -->
    <div id="page-loader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container con1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con3">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page loader -->

    <!-- Section: home video -->
    <section id="intro" class="home-video text-light">
        <div class="home-video-wrapper">
            <div class="homevideo-container">
           <div id="P1" class="bg-player" style="display:block; margin: auto; background: rgba(0,0,0,0.5)" data-property="{videoURL:'https://www.youtube.com/watch?v=pvDlRTq110g&t=7s',containment:'.homevideo-container', quality: 'hd720', showControls: false, autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
        </div>
        <div class="overlay">
            <div class="text-center video-caption">
                <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
                    <h1 class="big-heading font-light"><span id="js-rotating">Real estate is property consisting of land and the buildings on it,
Silvereen ― Real estate </span></h1>
                </div>
                <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
                    <div class="margintop-30">
                        <a href="#about" class="btn btn-skin" id="btn-scroll">Start here</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /Section: intro -->
    
    
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2 mob-logo">
                                                <div class="row">
                                                      <div class="site-logo">
                                                            <a href="index.html"><img src="img/logo-dark.png" alt="" /></a>
                                                      </div>
                                                </div>
                                          </div>
                                          

                                          <div class="col-md-10 mob-menu">
                                                <div class="row">
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                 @if (Route::has('login'))
                                                                 @if (Auth::check())
                                                                  <li class="active"> <a href="{{ url('/home') }}">Home</a></li>
                                                                   @else
                                                                       <li> <a href="{{ url('/login') }}">Login</a></li>
                                                                       <li> <a href="{{ url('/register') }}">Register</a></li>
                                                                    @endif
                                                                     @endif

                                                                  <li><a href="#about">About Us</a></li>
                                                                   <li><a href="#service">Services</a></li>
                                                                  <li><a href="#featured">On going projects</a></li>                                                                                 
                                                                  
                                                                  <li><a href="#contact">Contact</a></li>
                                                                 
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  

  

       <!-- Section: about -->


       <section id="featured">
        <div class="container">     
        
            <div class="row"><h2>Featured Properties</h2></div>
            
                
            
            
            <div class="row">
            
            
                   
                
                <div class="col-sm-6 no-padding">
                    <div class="featured-property-main">
                        <div class="img">
                                                        <a href="http://bluemountain.lk/lands/rajagiriya/prestige-living-rajagiriya/"><img src="http://bluemountain.lk/wp-content/uploads/2018/08/Rajagiriya-579x533.jpg" alt="" class="img-responsive"></a>    
                                                    </div>
                        <div class="type" title="Land">L</div>
                        <div class="caption">
                            <h3>Sarasivigama – Peradeniya</h3>
                            <p>නල ජලය, විදුලිය
තාර යෙදූ පුළුල් මාර්ග සහ කොන්ක්‍රීට් කානු පද්ධති
බැංකු ණය සහ පහසු ගෙවීමේ ක්‍රම සමගින්
කාටත් දැරිය හැකි මිලකට දර්ශනීය බිම් කොටස්</p>
                        </div>
                    </div>
                </div>
            
                                                                
                           
                         
                        <div class="col-sm-6 no-padding">
                            <div class="featured-property clearfix left-aligned">
                            
                                <div class="visual col-xs-6 no-padding">
                                    <div class="img">
                                        <a href="http://bluemountain.lk/lands/negombo/bless-negombo/"><img src="http://bluemountain.lk/wp-content/uploads/2018/07/4-1-290x267.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="type" title="Land">L</div>
                                    <div class="pointer"></div>
                                </div>
                                
                                <div class="details col-xs-6 no-padding">
                                    <div class="caption">
                                        <h3><a href="http://bluemountain.lk/lands/negombo/bless-negombo/">Bless - Negombo</a></h3>
                                        <p class="hidden-sm hidden-xs">මීගමුව නගරයට විනාඩි දෙකෙන් ගුවන් තොටුපලට විනාඩි 5 න් අධිවේගී පිවිසුමට පහසුවෙන් මීගමුව සංචාරක පුරවරයේ විනෝදාස්වාදය ජාතික සහ ජාත්‍යන්තර පාසැල් අහල පහලින්</p>
                                                                                <div class="status available">Available</div>
                                                                            </div>
                                </div>
                                
                            </div>
                        </div>
                            
                                                
                                                
                           
                         
                        <div class="col-sm-6 no-padding">
                            <div class="featured-property clearfix right-aligned">
                            
                                <div class="visual col-xs-6 no-padding">
                                    <div class="img">
                                        <a href="http://bluemountain.lk/lands/gampaha/white-oaks/"><img src="http://bluemountain.lk/wp-content/uploads/2018/07/4-2-290x267.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="type" title="Land">L</div>
                                    <div class="pointer"></div>
                                </div>
                                
                                <div class="details col-xs-6 no-padding">
                                    <div class="caption">
                                        <h3><a href="http://bluemountain.lk/lands/gampaha/white-oaks/">White OAKS - Delgoda</a></h3>
                                        <p class="hidden-sm hidden-xs">කඩවතට, කිරිබත්ගොඩට, කඩුවෙලට සැනෙකින් පිවිසිය හැකි ඔබ දෙවරක් නොහිතන අසමසම ඉඩම බැඩ්මින්ටන් පිටියක්, ව්‍යායාම මoතීරු, ළමා උද්‍යාන ඇතුලු නවීන පහසුකම් ගොන්නක් සහිත ගාම්භීර මිටියාවතේ ඔබේ නිවස හදන්න&#8230; අඩි 30 පුලුල් මාර්ග, ජලය විදුලිය සහ දැවැන්ත ආරක්ෂිත තාප්ප ඇතුලු සියල්ල ඔබේ ඉඩමට</p>
                                                                                <div class="status available">Available</div>
                                                                            </div>
                                </div>
                                
                            </div>
                        </div>
                            
                  
                            
                                                
                                                    
                
               
               
               
               
            </div>

                     <div class="row">
            
            
                   
                
                <div class="col-sm-6 no-padding">
                    <div class="featured-property-main">
                        <div class="img">
                                                        <a href="http://bluemountain.lk/lands/rajagiriya/prestige-living-rajagiriya/"><img src="http://bluemountain.lk/wp-content/uploads/2014/03/1.jpg" alt="" class="img-responsive"></a>    
                                                    </div>
                        <div class="type" title="Land">L</div>
                        <div class="caption">
                            <h3>New Diyawannawa – Homagama</h3>
                            <p>සෑම බිම් කොටසකටම විවරවෙන සුනිල වැව
ශරීර සුවතා මංතීරු සහ සෙල්ලමට ඉඩක්
හෝමාගම සහ කොට්ටාව ඇතුළු නගර රැසක ඇසුර
කොට්ටාව සහ කහතුඩුව අධිවේගී පිවිසුම</p>
                        </div>
                    </div>
                </div>
            
                                                                
                           
                         
                        <div class="col-sm-6 no-padding">
                            <div class="featured-property clearfix left-aligned">
                            
                                <div class="visual col-xs-6 no-padding">
                                    <div class="img">
                                        <a href="http://bluemountain.lk/lands/negombo/bless-negombo/"><img src="http://bluemountain.lk/wp-content/uploads/2018/07/4-2-290x267.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="type" title="Land">L</div>
                                    <div class="pointer"></div>
                                </div>
                                
                                <div class="details col-xs-6 no-padding">
                                    <div class="caption">
                                        <h3><a href="http://bluemountain.lk/lands/negombo/bless-negombo/">KINGSTON – KATUBADDA</a></h3>
                                        <p class="hidden-sm hidden-xs">
                                        ගාලු පාරට මීටර 100 යි
                                        දෙහිවල, පිළියන්දල, මොරටුව යන නගර රැසක ඇසුර
                                        සුපිරි වෙළඳ සැල්, ජාතික සහ ජාත්‍යන්තර පාසල්, රාජ්‍ය සහ රාජ්‍ය නොවන ආයතන ආදී ඔබ නම් කරන ඕනෑම පහසුකමක් සමගින්
                                        ආරක්‍ෂිත ගේට්ටු සහ තාප්ප</p>
                                                                                
                                                                            </div>
                                </div>
                                
                            </div>
                        </div>
                            
                                                
                                                
                           
                         
                        <div class="col-sm-6 no-padding">
                            <div class="featured-property clearfix right-aligned">
                            
                                <div class="visual col-xs-6 no-padding">
                                    <div class="img">
                                        <a href="http://bluemountain.lk/lands/gampaha/white-oaks/"><img src="http://bluemountain.lk/wp-content/uploads/2018/07/4-1-290x267.jpg" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="type" title="Land">L</div>
                                    <div class="pointer"></div>
                                </div>
                                
                                <div class="details col-xs-6 no-padding">
                                    <div class="caption">
                                        <h3><a href="http://bluemountain.lk/lands/gampaha/white-oaks/">Highway Front – Pothuhara</a></h3>
                                        <p class="hidden-sm hidden-xs">කොළඹ 6 පාරට මුහුණලා පිහිටීම
ඉදිවෙමින් පවතින අධිවේගී පිවිසුමට විනාඩියක දුරින් පිහිටීම
ලංකාවේ ඕනෑම ස්ථානයකට ගමනාගමන පහසුකම
පාසැල්, වෙළඳසැල් </p>
                                                                              
                                                                            </div>
                                </div>
                                
                            </div>
                        </div>
                            
                  
                            
                                                
                                                    
                
               
               
               
               
            </div>
        </div>
    </section>

    




      <!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">About</h2>
                    <div class="divider-header"></div>
                     <blockquote >In just 8 years, the Silvereen  Group has achieved pinnacles of success that has been hitherto unheard of in the real estate industry of Sri Lanka. The Group already consists of 4 very large scale companies with an asset base in excess of Rs. 14 Billion and 7 other large companies handling all aspects of real estate and land thus enabling us to offer a comprehensive service. In total the Group provides employment to nearly 2,100 individuals in various capacities. The brand ‘Silvereen ’ is today a household name synonymous with trust, innovation and reliability and is certainly the trailblazer in Sri Lanka’s real estate and land industry!. </blockquote >
                    </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="text-center">
        <div class="container">

        
        <div class="row">
             <div class="icon"><span><i class="glyphicon glyphicon-envelope"></i></span></div>
           <h6 >Vision</h6>
                  </div>

                  <blockquote > To be the cause for shaking up the paradigm of impossible goals by being the role model that conquers the business world by entering Sri Lanka’s top 25 companies list and give Sri Lanka pride and glory by being the first Sri Lankan company to enter the Fortune 500 Companies Worldwide List..</blockquote >

               
                
                  <div >
                    <div class="icon"><span><i class="glyphicon glyphicon-envelope"></i></span></div>
                  <h6>MISSION</h6>

                  <blockquote >ShareDocs Enterpriser promises 0% data leakage and secure management of documents. Since it has a provision for hierarchy-specific access , 
                  every component of the organization can access data only permissible to their role. This reduces the chances of misuse and unauthorized access.</blockquote >

                </div>
                
                
                    
                    
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/ss.png"  alt="">
                </div>
        </div>      
        </div>
        </div>
    </section>
    <!-- /Section: about -->

    <!-- Section: parallax 1 -->    
    <section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">   
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                        <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Real estate is "property consisting of land and the buildings on it, along with its natural resources</h2>
                        </div>
                    </div>              
                </div>
            </div>
    </section>  
    
    <!-- Section: services -->
    <section id="service" class="home-section color-dark bg-white">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Services</h2>
                    <div class="divider-header"></div>
         
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center">
        <div class="container">

        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="pe-7s-note pe-5x"></span> 
                    </div>
                    <div class="service-desc">                      
                        <h5>Residential real estate</h5>
                        <p>
                        includes both new construction and resale homes. The most common category is single-family homes. There are also condominiums, co-ops, townhouses, duplexes, triple-deckers, quadplexes, high-value homes, multi-generational and vacation homes
                        </p>
                      
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                       <span class="pe-7s-note pe-5x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5>Commercial real estate</h5>
                        <p>
                         includes shopping centers and strip malls, medical and educational buildings, hotels and offices. Apartment buildings are often considered commercial, even though they are used for residences. That's because they are owned to produce income.
                        </p>
                        
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                        <span class="pe-7s-note pe-5x"></span> 
                    </div>
                    <div class="service-desc">
                        <h5>Industrial real estate</h5>
                        <p>
                        includes manufacturing buildings and property, as well as warehouses. The buildings can be used for research, production, storage and distribution of goods. Some buildings that distribute goods are considered commercial real estate. 
                        </p>
                      
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                    <div class="service-icon">
                       <span class="pe-7s-note pe-5x"></span>  
                    </div>
                    <div class="service-desc">
                        <h5>Empty Land </h5>
                        <p>
                            includes vacant land, working farms and ranches. The subcategories within vacant land include undeveloped, early development or reuse, subdivision and site assembly. Here's more at Land Broker Transactions..
                        </p>
                       
                    </div>
                </div>
                </div>
            </div>
        </div>      
        </div>
        </div>
    </section>
    
    <!-- /Section: works -->

    <!-- Section: parallax 3 -->    
    <section id="parallax3" class="home-section parallax text-light text-center" data-stellar-background-ratio="0.5">   
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonialslide clearfix flexslider">
                            <ul class="slides">
                                <li><blockquote>
                                Real estate is "property consisting of land and the buildings on it, along with its natural resources.
                                    </blockquote>
                                    <h4>Silvereen <span>&#8213; Real estate</span></h4> 
                                </li>
                                <li><blockquote>
                               The business of real estate; the profession of buying, selling, or renting land, buildings, or housing.
                                    </blockquote>
                                    <h4>Silvereen <span>&#8213; Real estate </span></h4>
                                </li>   
                            </ul>
                        </div>                  
                    </div>  
                </div>
            </div>
    </section>  
    

    <!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                    <div class="section-heading text-center">
                    <h2 class="h-bold">Contact us</h2>
                    <div class="divider-header"></div>
                    <p>Silvereen Real Estate Co.(pvt) Ltd..</p>
                    </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="container">

            <div class="row marginbot-80">
                <div class="col-md-8 col-md-offset-2">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="btn btn-skin btn-lg btn-block">Send Message</button></div>
                    </form>
                </div>
            </div>  


        </div>
    </section>
    <!-- /Section: contact -->

    <!-- google map -->
    <div id="map-btn1-div">
        <a id="map-btn1" class="gmap-btn close-map-button btn-show" href="#map">
        Click here to open the map
        </a>
    </div>
    <a id="map-btn2" class="btn btn-skin btn-lg btn-noradius gmap-btn close-map-button btn-hide" href="#map" title="Close google map" data-toggle="tooltip" data-placement="top">
    No 117,Kotugodella st, Kandy, Sri Lanka
    </a>
    
    <!-- google map -->
    <section id="map" class="close-map">
        <div id="google-map"></div>
    </section>
    <!-- /google map -->        
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    
                    <div class="text-center">
                        <a href="#intro" class="totop"><i class="pe-7s-angle-up pe-3x"></i></a>
                        
                        <div class="social-widget">
                            
                            
                            <ul class="team-social">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>                       
                        
                        </div>
                        <p>&copy;Darshana Ariyathilaka . All Rights Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Valera
                            -->
                            
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </footer>

    <!-- Core JavaScript Files -->
    <script src="Val/js/jquery.min.js"></script>     
    <script src="Val/js/bootstrap.min.js"></script>
    <script src="Val/https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="Val/js/jquery.sticky.js"></script>
    <script src="Val/js/slippry.min.js"></script> 
    <script src="Val/js/jquery.flexslider-min.js"></script>
    <script src="Val/js/morphext.min.js"></script>
    <script src="Val/js/gmap.js"></script>
    <script src="Val/js/jquery.mb.YTPlayer.js"></script>
    <script src="Val/js/jquery.easing.min.js"></script> 
    <script src="Val/js/jquery.scrollTo.js"></script>
    <script src="Val/js/jquery.appear.js"></script>
    <script src="Val/js/stellar.js"></script>
    <script src="Val/js/wow.min.js"></script>
    <script src="Val/js/owl.carousel.min.js"></script>
    <script src="Val/js/nivo-lightbox.min.js"></script>
    <script src="Val/js/jquery.nicescroll.min.js"></script>
    <script src="Val/js/custom.js"></script>
    <script src="Val/contactform/contactform.js"></script>
    
</body>
</html>
