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
  
}


.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('img/logos/log.png') }}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        
                      
                         
                          


                     
          
                    </ul>
                </div>
            </div>
        </nav>
    </header>





    

</div>




<div id="muin" class="muin">
    

</div>

 <li><a href="/reg">Home page <span class="icon icon-arrow-right2"></span></a></li>
 <center>

 <form class="login100-form validate-form" action="{{URL::to('/reg')}}"  method="post">
          @csrf

    

   <div class="wrap-input100 validate-input" data-validate="Enter password" >
            <textarea class="input100" type="integer" name="reg" placeholder="chose year for deleting all data from this year"></textarea>
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

   <div class="container-login100-form-btn">
            <button type="submit" name="button" class="button">
              DELETE 
            </button>
            
          </div>
        </form>







 @foreach ($data  as $data)


    
    <h3>User type: <th>{{$data->name}}</th></h3>
    <h3> Registration number: <th>{{$data->regnum}}</th><h3>
      <h3> Name: <th>{{$data->username}}</th><h3>
     <h3> Email: <th>{{$data->email}}</th></h3>
    

    <form class="login100-form validate-form" action="{{URL::to('/dre')}}"  method="post">
          @csrf

    

   <div class="wrap-input100 validate-input" data-validate="Enter password" >
            <input class="input100" type="hidden" name="h" value="{{$data->email}}">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

   <div class="container-login100-form-btn">
            <button type="submit" name="button" class="button">
              DELETE
            </button>
            
          </div>
        </form>
   


    @endforeach

<br>

   

</center>


    
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="{{ asset ('img/logos/log-2.png') }}" alt="" />
                        </div>
                        <p> If you are harassed by someone or a group in the campus just complain here. Remember that your identity will be secret. We are with you. </p>
                        <p> Just complain to make your campus clean from violence.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                         
                        </div>

                        <ul class="footer-links hov">
                            
              <li><a href="#">About us <span class="icon icon-arrow-right2"></span></a></li>
                            
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
        
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                         <div class="widget-title">
                            <img src="{{ asset ('img/logos/sLogo.png') }}" alt="" />
                        </div>
            <p><i class="fa fa-globe"></i> www.sust.edu </p>
                        <p></a><i class="fa fa-envelope"></i> system.admin@sust.edu</p>
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
