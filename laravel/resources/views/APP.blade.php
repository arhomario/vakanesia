<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/full-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/datepicker3.css')}}" type="text/css">

    <style>
    .no-padding{
      padding: 0;
    }
    /*Navbar*/

    .navbar{
      padding-top: 20px;
      padding-bottom: 25px;
      -webkit-transition: all 1000ms ease;
      -moz-transition: all 1000ms ease;
      -ms-transition: all 1000ms ease;
      -o-transition: all 1000ms ease;
      transition: all 1000ms ease;
    }
    @media (max-width:768px) {
      .navbar{
        padding-top: 2px;
        padding-bottom: 2px;
      }
    }
    .navbar-default {
      background: rgba(36, 132, 189, 0.7);
      border-color: transparent;
    }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{
      background: rgba(36, 132, 189, 0.7);
      border-color: transparent;
    }
    .navbar-default .navbar-toggle{
      border-color: transparent;
    }
    .navbar-default .navbar-toggle .icon-bar{
      background: #fff;
    }

    .navbar-default .navbar-brand{
      padding-top: 0px !important;
    }

    .navbar-default .navbar-brand .logo{
      width: 200px;
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{
      background: transparent;
    }
    @media (min-width:1200px) {
      .navbar-default .navbar-nav{
        padding-left: 130px;
      }
    }

    .navbar-default .navbar-nav > li > a {
      color: #fff;
    }
    /*End Navbar*/

    /*Footer*/
    .footer{
        background: url("{{ asset('template/web/img/bg-footer.png') }}") no-repeat;
       /*-webkit-background-size: cover;*/
       /*-moz-background-size: cover;*/
       /*-o-background-size: cover;*/
       background-size: cover;
       padding-top: 25px;
       padding-bottom: 25px;
       color: #fff;
    }

    .footer .menu-title{
      margin-top: 15px;
      margin-left: 15px;
      margin-bottom: 0px;
    }

    .footer .nav > li > a{
      color: #fff;
      padding: 2px 15px;
    }

    .footer .nav > li > a:hover{
      background: transparent;
      text-decoration: underline;
    }

    .footer .social{
      list-style: none;
      text-decoration: none;
      margin: 0;
      padding: 0;
    }
    .footer .social li{
      float: left;
      padding: 9px 11px;
      width: 40px;
      height: 40px;
      margin: 10px;
      border: 1px solid #fff;
      border-radius: 50%;

      -webkit-transition: all 1000ms ease;
      -moz-transition: all 1000ms ease;
      -ms-transition: all 1000ms ease;
      -o-transition: all 1000ms ease;
      transition: all 1000ms ease;
    }

    .footer .social li:hover{
      background: #fff;
      -webkit-transition: all 1000ms ease;
      -moz-transition: all 1000ms ease;
      -ms-transition: all 1000ms ease;
      -o-transition: all 1000ms ease;
      transition: all 1000ms ease;
    }
    .footer .social li:hover a{
      color: #136FBC;
    }
    .footer .social li a{
      color: #fff;
      text-align: center;
    }

    .footer .contact{
      margin-top: 25px;
      margin-bottom: 25px;
    }
    .footer .contact li{
      margin-bottom: 15px;
    }
    .footer .contact-icon{
      border: 1px solid #fff;
      width: 30px;
      height: 30px;
      padding-top: 5px;
      text-align: center;
      vertical-align: middle;
      border-radius: 3px;
    }
    .footer .input-group-addon{
      background: rgba(36, 132, 189, 0.7);
      color: #fff;
      border-color: rgba(36, 132, 189, 0.7);
    }

    .footer .form-control{
      background: rgba(255,255,255,.3);
      border-color: rgba(255,255,255,.3);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      color: #fff;
    }
    .footer .form-control::-webkit-input-placeholder{
      color: #fff !important;
    }
    /*End Footer*/

    /*Copyright*/
    .copyright{
      background: #0c72a6;
      color: #fff;
      padding: 25px;
      font-size: 18px;
      text-align: center;
    }
    /*End Copyright*/

    </style>
    <script src="{{asset('assets/js/jquery.js') }}"></script>
    <script src="{{asset('assets/js/pull.js') }}"></script>
      <script>
      // function myFunction(){
      //   var h=$(window).height();
      //   $(".bg").css("height",h);}
      </script>

      <script>
      // function promo(){
      //   var a=$(window).width();
      //   $(".promo").css("width",a);}
      </script>

      <style>
        @font-face {font-family: 'PT Sans';             src: url({{asset('assets/fonts/PTSans.ttf')}});        }
        @font-face {font-family: 'PT Sans Bold';        src: url({{asset('assets/fonts/PTSansBold.ttf')}});        }
        @font-face {font-family: 'PT Sans Italic';      src: url({{asset('assets/fonts/PTSansItalic.ttf')}});        }
        @font-face {font-family: 'PT Sans Caption Bold';src: url({{asset('assets/fonts/PTSansCaptionBold.ttf')}});        }
      </style>



  </head>

  <body onresize="myFunction()" onload="promo()" data-spy="scroll" data-target="#myScrollspy" data-offset="15">
    <div class="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/')}}"><img src="{{asset('assets/img/logo.png') }}" class="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="{{ url('trip/custom') }}">Custom Trip</a></li>
              <li><a href="{{ url('trip/all') }}">All Trip</a></li>
              <li><a href="{{ url('blog') }}">Blog</a></li>
              <li><a href="{{ url('help') }}">Help</a></li>
              <li><a href="{{ url('contact') }}">Contact</a></li>
              <li class="dropdown hidden-xs hidden-md hidden-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('member/login') }}">Login</a></li>
                  <li><a href="{{ url('member/signup') }}">Sign Up</a></li>
                </ul>
              </li>
            </ul>
            <!-- <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right hidden-sm">
              <li><a href="{{ url('member/login') }}"><i class="icon ion-android-person"></i> Login</a></li>
              <li><a href="{{ url('member/signup') }}">Sign Up</a></li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li> -->
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

  <div class="clearfix"></div>

  @yield('content')

  <div class="clearfix"></div>


  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">

          <div class="row">
            <div class="col-sm-3">
              <p class="menu-title">TENTANG KAMI</p>
              <ul class="nav">
                <li><a href="#">Informasi Perusahaan</a></li>
                <li><a href="#">Armada</a></li>
                <li><a href="#">Karir</a></li>
                <li><a href="#">Peta Situs</a></li>
              </ul>
            </div><!--/.col-->
            <div class="col-sm-3">
              <p class="menu-title">PRODUK</p>
              <ul class="nav">
                <li><a href="#">Vakanesia Merchant</a></li>
                <li><a href="#">Vakanesia Cafe</a></li>
                <li><a href="#">Vakanesia Shield</a></li>
              </ul>
            </div><!--/.col-->
            <div class="col-sm-3">
              <p class="menu-title">LOGIN</p>
              <ul class="nav">
                <li><a href="#">Travel Agent</a></li>
                <li><a href="#">Perusahaan</a></li>
              </ul>
            </div><!--/.col-->
          </div><!--/.row-->

        </div><!--/.col-->
        <div class="col-md-3">
          <ul class="nav contact">
            <li>
              <div class="row">
                <div class="col-xs-2">
                  <div class="contact-icon">
                    <i class="icon ion-ios-location"></i>
                  </div>
                </div>
                <div class="col-xs-10 info">
                  Jl. Raya Bsd No7, Tangerang Selatan Indonesia, 15524
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-xs-2">
                  <div class="contact-icon">
                    <i class="icon icon ion-ios-email"></i>
                  </div>
                </div>
                <div class="col-xs-10 info">
                  example@gmail.com
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-xs-2">
                  <div class="contact-icon">
                    <i class="icon ion-ios-telephone"></i>
                  </div>
                </div>
                <div class="col-xs-10 info">
                  +62 0873 08822
                </div>
              </div>
            </li>
          </ul>
        </div><!--/.col-->
      </div><!--/.row-->


      <div class="row">
        <div class="col-xs-12 col-sm-9">

          <ul class="social">
            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter fa-lg" ></i></a></li>
            <li><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
          </ul>

        </div><!--/.col-->
        <div class="col-xs-12 col-sm-3">

          <form>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope"></i></span>
              <input type="text" class="form-control" placeholder="Subscribe for Newsletter" aria-describedby="sizing-addon2">
            </div>
          </form>

        </div><!--/.col-->
      </div><!--/.row-->


    </div><!--/.container-->
  </div><!--/.footer-->


  <div class="clearfix"></div>
  <div class="copyright">
      Vakanesia Indonesia
  </div>


</div><!--/.Wrapper-->

      <!--<script src="{{asset('assets/js/bootstrap.min.js')}}" type="javascript" ></script>-->

      <script type="javascript">
      $('.carousel').carousel({
          interval: 500000 //changes the speed
      });
      </script>
          <script src="{{asset('assets/js/jquery.js') }}"></script>
          <script src="{{asset('assets/js/bootstrap.js') }}" ></script>
          <script src="{{asset('assets/js/bootstrap-datepicker.js') }}"></script>
          <script src="{{asset('template/web/js/combodate.js') }}"></script>
          <script src="{{asset('template/web/js/moment.js') }}"></script>
        </div>
      <script>
        $(window).scroll(function () {
            var w = $(window).width();
            if (w > 768) {
                if ($(this).scrollTop() > 50) {
                  $('.navbar').css("padding-top","0px");
                  $('.navbar').css("padding-bottom","0px");
                } else {
                  $('.navbar').css("padding-top","20px");
                  $('.navbar').css("padding-bottom","25px");
                }
            }
        });
      </script>
    </body>
  </html>
