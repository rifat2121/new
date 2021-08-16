<!DOCTYPE html>
<html lang="en">

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
   
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


    <link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>

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


.muin{
  font-family:  'Brush Script MT', cursive; 
  font-size:30px; 
  margin: 10px 50px; 
  letter-spacing: 6px; 
  font-weight: blue;
  color: ;
  
}
.muina{
  
  

  letter-spacing: 2px; 
  font-weight: blue;
  color:black;
  font-size:20px;
  
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

 <div id="typedtext"></div>
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
                    <a class="navbar-brand logo1" href="index.html"><img src="{{ asset('img/logos/diu.jpg') }}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a class="active" href="/login">Login</a></li>
                      
                         
                            <li><a href="/firstr">Sing up</a></li>

                             <li><a href="/contact">Contact Us </a></li>  


                     
          
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<div id="muin" class="muina">

     @foreach ($dat as $dat)


           

        <marquee bgcolor=#FFA62F height =38 scrollamount= 6 direction = "right" width = "100%"><strong>Notice: {{$dat->message}}</strong> </marquee>
            
     
     @endforeach

</div>






<div id="services" class="parallax section lb">
        <div class="container">


            <div class="section-title text-center">
              <h3>Blogging Desk</h3>
                <strong>  <p class="lead">Never Hurt Anyone.Keep Helping Mentality</p> </strong>
            </div><!-- end title -->
            

            
      

            <div class="owl-services owl-carousel owl-theme">
                   @foreach ($data  as $data)

               @if($data->user=="studentadvisor")
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="img/sa.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="img/sa.png" alt="" class="img-responsive img-rounded">
                    </div>
              
                    <div class="service-dit" style="">
           
                 <strong> <h3><p>{{$data->message}}</p></strong>
                   </div>
                   
                </div>
                @endif
                <!-- end service -->
                @if($data->user=="proctor")
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="img/p.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="img/p.png" alt="" class="img-responsive img-rounded">
                    </div>
                 

                    
                    <div class="service-dit">
           
                  <strong><h3><p>{{$data->message}}</p></strong>
                   </div>
                  

                </div>
                 @endif
                <!-- end service -->
                   @if($data->user=="hcell")
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="img/h.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="img/h.png" alt="" class="img-responsive img-rounded">
                    </div>

              
                    <div class="service-dit">
           
                 <strong><h3> <p>{{$data->message}}</p></strong>
                   </div>
                

                </div>
                   @endif
                <!-- end service -->


              @endforeach
                <!-- end service -->
            </div><!-- end row -->

        

            </div>




        </div><!-- end container -->
    </div><!-- end section -->

















     <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Welcome Here</h2> <br>
                        <p class="lead">This webside is design for hostel management.
                          we work for Defordin hostel management.Student can  send us a request for a seat.And admin can Approve. 
                        </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->


                  <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('img/about_0.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="https://www.youtube.com/watch?v=K2v895MJWyY" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div> 


            <hr class ="hr1">
            <div class="row">




                   
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('img/about_2.png') }}" alt="" class="img-responsive img-rounded">
                        <a href="https://www.youtube.com/watch?v=O4VoBlTpwFc" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->




                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Rules</h4>
                        <h2>Before complain read the rules carefully</h2>
                     <!--   <p class="lead"> this website works with all aspects of harrasment in campus..you can complain here..give some suggestion ..share your problem related our campus... </p> -->

                        <p> 1. You have to be the Student of Defordin University.</p>
                        <p>2.  Explain problem in easy manner </p>
                        <p>3.  Dont't be afraid.Share your problem.</p>
                        <p>4. Your all information is in databse so don't dare to misbehave</p>
                     
                            
 <a href="#services" class="btn btn-light btn-radius btn-brd grd1"></a>
                    </div><!-- end messagebox -->
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
                        <p>If you badly need a seat please share with us. Remember that your identity will be secret. We are with you. </p>
                        <p> Just beleave on us</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                         
                        </div>

                        <ul class="footer-links hov">
                            
              <li><a href="#">We are here to help you <span class="icon icon-arrow-right2"></span></a></li>
                            
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
        
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                         <div class="widget-title">
                            <img src="{{ asset ('img/logos/diu.jpg') }}" alt="" />
                        </div>
                        <p><i class="fa fa-globe"></i> DIU </p>
                        <p></a><i class="fa fa-envelope"></i> system.admin@DIU.edu</p>
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
