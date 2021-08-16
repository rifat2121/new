<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>GoodWEB Solutions - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->




    <link rel="stylesheet" href="{{ asset('style.css') }}">

        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: 3px solid transparent;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 20px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 50px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -40px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 55px;
}

.button:hover span:after {
  opacity: 2;
  right: 0;
}
li a, .dropbtn {
  display: inline-block;
  }
li.dropdown {
  display: inline-block;
}
.dropdown-content {
  display: none; 
  position: absolute;
  }
  .dropdown:hover .dropdown-content {
  display: block;
}
.logo1 img{
  width: 60px;
}
</style>
    <!-- Modernizer for Portfolio -->
    <script src="{{ asset('js/modernizer.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
      <div class="loader__bar"></div>
      <div class="loader__bar"></div>
      <div class="loader__bar"></div>
      <div class="loader__bar"></div>
      <div class="loader__bar"></div>
      <div class="loader__ball"></div>
    </div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
    <!--
  <div class="top-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="left-top">
            <div class="email-box">
              <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> youremail@gmail.com</a>
            </div>
            <div class="phone-box">
              <a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 890</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="right-top">
            <div class="social-box">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
              <ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo1" href="index.html"><img src="{{ asset('img/logos/Diu.jpg') }}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a class="active" href="/">logout</a></li>
                        <li><a href="/new">status</a></li>
                         
                            <li><a href="/image">Apply for a seat</a></li>


                     
            <li><a href="/stchat">Message Replay</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
  

  <div class="slider-area">
    <div class="slider-wrapper owl-carousel">
      <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
        <div class="container">
          <div class="row">
            <div class="slider-content-area">
              <div class="slide-text">
                <h1 class="homepage-three-title"> Apply for  <span> seat </span> </h1>
                <h2> If are seaking for seat please came here . <br>
                                 &nbsp;  -- Celeste Ng
                                </h2>
                <div class="slider-content-btn">
                  <a class="button btn btn-light btn-radius btn-brd" href="/image">apply for a seat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="slider-item text-center home-one-slider-otem slide-item-four slider-bg-two">
        <div class="container">
          <div class="row">
            <div class="slider-content-area">
              <div class="slide-text">
                <h1 class="homepage-three-title">We can give you the best facility in  <span> bangladesh </span> </h1>
                <h2>A beautifull campus give the best life <br>
                                 &nbsp;  -- Ana Navarro
                                </h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="/image">Apply for a seat</a>
                                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
        <div class="container">
          <div class="row">
            <div class="slider-content-area">
              <div class="slide-text">
                <h1 class="homepage-three-title"> We can give you<span> security </span> </h1>
                <h2>We give healthy food and best hygenic culture to bost your  study </h2>
                <!--<div class="slider-content-btn">
                  <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
                  <a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
                </div>-->
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="/image">Apply for a seat</a>
                                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Welcome Here</h2>
                        <p class="lead"> this website works with the hostel seat management of our university </p>

                        <p> We take your request.And comunicate with you all this mater</p>

                        <a href="#" class="btn btn-light btn-radius btn-brd grd1"></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('img/about_0.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="https://www.youtube.com/watch?v=K2v895MJWyY" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>    <!-- end row -->

            <hr class="hr1"> 

            <div class="row">
        <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('img/about_1.png') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
        
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>We Are the solution of your problem</h2>
                        <p class="lead"> We are the intermediary between you and the administration in hostel management issu. </p>

                        <p> Confidentiality: The privacy of the persons involved will be protected to the extent possible. Disclosures may be required by law or to those who need to know within the context of the investigation, analysis, appeal, prevention of recurrence, or correction of misconduct.  Therefore, a guarantee of confidentiality is not provided.  Should an accuser or reporter request confidentiality and that no action be taken, the district must still discharge its duties and obligations to prevent and correct the harassment. </p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1"></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class ="hr1">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Rules</h4>
                        <h2>Before apply read the rules carefully</h2>
                     <!--   <p class="lead"> this website works with all aspects of harrasment in campus..you can complain here..give some suggestion ..share your problem related our campus... </p> -->

                        <p> 1. You have to be the Student of DIU.</p>
                        
                        <p>2.  Explain problem in easy manner </p>
                        <p>3.  Include picture to apply for the seat</p>
                        <p>5.  Dont't be afraid.Share your problem.</p>
                        <p>6. Your all information is in databse so don't dare to misbehave</p>
                     
                            

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1"></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('img/about_2.png') }}" alt="" class="img-responsive img-rounded">
                        <a href="https://www.youtube.com/watch?v=wu3RzCGEEpY" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->



 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                         
                        </div>
                        
                        <p> Just complain to make your  problem easy</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
          
                           
              <li><a href="/image">Apply for the seat<span class="icon icon-arrow-right2"></span></a></li>
             
                           
                                <li><a href="/aboutus">About us <span class="icon icon-arrow-right2"></span></a></li>
                                    <li><a href="/cs">Contract us<span class="icon icon-arrow-right2"></span></a></li>

                                 <li><a href="/">logout <span class="icon icon-arrow-right2"></span></a></li>

                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
        
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                         <div class="widget-title">
                            <img src="{{ asset ('img/logos/diu.jpg') }}" alt="" />
                        </div>
            <p><i class="fa fa-globe"></i> www.DIU.edu </p>
                        <p></a><i class="fa fa-envelope"></i> system.admin@Diu.edu</p>
                        <p><i class="fa fa-phone"></i> 880-821-713491, 714479, 713850, 717850, 716123, 715393</p>
                        <p><i class="fa fa-fax">  880-821-715257, 725050</i></p>                      
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
    <script src="{{ asset('js/hoverdir.js') }}"></script>    

</body>
</html>