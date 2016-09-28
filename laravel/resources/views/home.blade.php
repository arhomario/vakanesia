@extends('APP')
@section('content')
<style>

@media (min-width:768px) {
  .owl-carousel .carousel-caption{
    bottom: 15%;
  }
}

.owl-carousel .carousel-caption .btn-default{
  background: transparent;
  border-color: #fff;
  color: #fff;
}
.trip-search{
  background: rgba(0, 0, 0, 0.5);
  padding-top: 15px;
  margin-top: -65px;
  z-index: 9;
  position: absolute;
  width: 100%;
}
@media(max-width:768px){
  .trip-search{
    background: transparent;
    margin: 0;
    position: relative;
    border-bottom: 1px solid #eee;
  }
}

.trip-search .form-control{
  width: 100%;
}
/*Content Title*/
.title-blue{
  font-family: "PT Sans";
  color: #0C72A6;
  font-size: 30px;
}
.title-gray{
  font-family: "PT Sans";
  color: #ccc;
  font-size: 30px;
}

.title .link{

  padding-top: 5px;
  font-weight: 600;
}
.title .link .link-blue{

  font-family: "PT Sans";
  color:#0C72A6;
}
.title .link .link-yellow{

  font-family: "PT Sans";
  color:#cdda3e;
}
@media (min-width:768px) {
  .title .link{
    text-align: right;
  }
}
/*End Content Title*/

/*=============================================================================*/
/*=================================PROMO TRIP==================================*/
/*=============================================================================*/
.promo{
    margin-top: 25px;
    margin-bottom: 25px;
}
.promo .item {
  margin-top: 10px;
}


.promo .item .detail{
  background:rgba(0, 0, 0, .075);
  padding-top: 15px;
  padding-bottom: 15px;
}

.promo .item .detail .title{
  color: #0C72A6;
  font-size: 20px;
}
.promo .item .detail .destination{
  color: #777;
}

.promo .item .detail .price-area{
  display: table;
  color:#cdda3e;
  width: 100%;
  height: 50px;
  text-align: right;
}

.promo .item .detail .price{
  display: table-cell;
  vertical-align: middle;

  /*font-weight: 600;*/
  font-size: 30px;
  font-weight: 700;
}

.promo .item .detail .pricing .price{

}







/*=============================================================================*/
/*==================================TOP HOTEL==================================*/
/*=============================================================================*/
/*.tophotel .item .tophotel_img{
  width: 80%;
}
.tophotel .item:hover .tophotel_img{
  transform: scale(1);
}*/
.tophotel .item {
  margin-bottom: 15px;
}
.tophotel .overlay_tophotel{
  position:absolute;
  height:100%;
  /*opacity: 0;*/
  display: table;
}


.tophotel .overlay_tophotel .overlay_tophotel_content {
  display: table-cell;
  vertical-align: bottom;
  padding-left: 15px;
}

.tophotel .overlay_tophotel .overlay_tophotel_content > a {
  border-radius: 0;
}
.tophotel .overlay_tophotel .overlay_tophotel_content .large-white{
  color: #fff;
  font-size: 40px;
  margin: 0;
}

.tophotel .overlay_tophotel .overlay_tophotel_content .small{
  color: #fff;
  margin: 0;
}
.tophotel .overlay_tophotel .overlay_tophotel_content .large-yellow{
  color: #cdda3e;
  font-size: 40px;
  margin: 0;
}

.tophotel .item .detail{
  background:rgba(0, 0, 0, .075);
  padding-top: 15px;
  padding-bottom: 15px;
}
.tophotel .item .detail .text-left .price{
  color: #777;
  font-size: 20px;
  font-weight: 700;
}


/*=============================================================================*/
/*==================================BANNER=====================================*/
/*=============================================================================*/
.banner{
  margin-top: 25px;
  margin-bottom: 25px;
}
.banner .banner-content{
  display: table;
  height: 420px;
  width: 100%;
}
.banner .caption{
  display: table-cell;
  vertical-align: middle;
}
.banner .caption h1{
  font-family: "PT Sans Italic";
  font-weight: 700;
  color: #fff;
}
.banner .caption h2{
  font-family: "PT Sans Italic";
  color: #0C72A6;
}
.banner .caption p{
  font-family: "PT Sans Italic";
  color: #777;
}

/*=============================================================================*/
/*=============================POPULAR DESTINATION=============================*/
/*=============================================================================*/
.popular{
  /*border-bottom: 1px solid #ccc;*/
  margin-top: 25px;
  margin-bottom: 25px;
}

.popular .item{
  margin-bottom:25px;
}

.popular .item:hover .overlay_popular{
  background:rgba(0,0,0,0.4);
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}
.popular .item:hover .detail a{
  color: #0C72A6;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}

.popular .item .detail{
  background:rgba(0, 0, 0, .075);
  padding-top: 15px;
  padding-bottom: 15px;
}

.popular .item .detail a{
  color: #ddd;
  font-size: 35px;
  float: right;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}
.popular .item .detail a:hover{
  color: #0C72A6;
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  -ms-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
}
.popular .overlay_popular{
  position:absolute;
  height:100%;
  /*opacity: 0;*/
  display: table;
}
.popular .overlay_popular .overlay_pupular_content {
  display: table-cell;
  vertical-align: bottom;
  padding-left: 15px;
}
.popular .overlay_popular .overlay_pupular_content .small{
  color: #fff;
  margin: 0;
}
.popular .overlay_popular .overlay_pupular_content .large{
  color: #cdda3e;
  font-size: 40px;
  margin: 0;
}

</style>
<title>Vakanesia</title>
<div id="content" >

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="{{ asset('assets/img/bg1.png') }}" class="slider-img">
          <div class="carousel-caption">
            <a href="#" class="btn btn-default">GO EXPLORE NOW</a>
          </div>
        </div>
        <div class="item">
          <img src="{{ asset('assets/img/bg2.png') }}" class="slider-img">
          <div class="carousel-caption" >
            <a href="#" class="btn btn-default">GO EXPLORE NOW</a>
          </div>
        </div>
      </div>


      <div class="trip-search">
        <div class="container">
          <div class="row">
            <form class="">
              <div class="col-xs-12 col-sm-7">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Cari Trip (ex. Lombok, Bromo, Gunung, Snorkeling)">
                </div>
              </div><!--/.col-->
              <div class="col-xs-6 col-sm-2">
                <div class="form-group">
                  <select class="form-control">
                    <option value="">Kapan Saja</option>
                  </select>
                </div>
              </div><!--/.col-->
              <div class="col-xs-6 col-sm-2">
                <div class="form-group">
                  <select class="form-control">
                    <option value="">Semua Harga</option>
                  </select>
                </div>
              </div><!--/.col-->
              <div class="col-xs-12 col-sm-1">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block"><i class="icon ion-search"></i></button>
                </div>
              </div><!--/.col-->
            </form>
          </div><!--/.row-->
        </div><!--/.container-->
      </div><!--/.trip-search-->




      <!-- Promo Trip -->
      <div class="container promo">

        <div class="title">
          <div class="col-sm-6">
            <span class="title-blue">Promo</span> <span class="title-gray">Trip</span>
          </div>
          <div class="col-sm-6">
            <!-- <a href="#">We Recomended</a> -->
          </div>
        </div>

        <div class="clearfix"></div>
        <hr>
        <div class="content">
          <?php
          $i=1;
          while ($i <= 3) {
          ?>
          <div class="col-xs-12 col-sm-4 col-md-4 item">
            <div class="overlay_promo">
              <div class="overlay_promo_content">
                <!-- <p class="small">Pantai Kuta</p>
                <p class="large">Bali</p> -->
              </div>
            </div>
            <img src="{{asset('assets/img/1.png')}}" class="promo_img" style="width:100%;"/>
            <div class="col-xs-12 detail">
                <div class="col-xs-6 no-padding text-left">
                  <p class="title">Trip to Bali 3D2N</p>
                  <p class="destination">Jakarta(CGK) ke Jogja (JOG) start from</p>
                </div>
                <div class="col-xs-6 no-padding text-right">
                  <div class="price-area">
                    <div class="price">
                      <p><sup>Rp</sup>544<sup>000</sup></p>
                    </div>
                  </div>
                  <img class="icon" src="{{ asset('template/web/img/Forma1.png')}}" width="20">
                </div>
            </div>
          </div><!--/.col-->
          <?php
            $i++;
            }
          ?>
        </div><!--/.row-->
      </div><!-- container Promo Trip -->

      <!-- Top Hotel -->
      <div class="container tophotel">

        <div class="title">
          <div class="col-sm-6">
            <span class="title-blue">Top</span> <span class="title-gray">Hotel</span>
          </div>
          <div class="col-sm-6 link">
            <a class="link-blue" href="#">Recomended</a> /
            <a class="link-yellow" href="#">Best Seller</a>
          </div>
        </div>

        <div class="clearfix"></div>
        <hr>
        <div class="content">
          <?php
          $i=1;
          while ($i <= 4) {
          ?>
          <div class="col-xs-12 col-sm-4 col-md-3 item">
            <div class="overlay_tophotel">
              <div class="overlay_tophotel_content">
                <p class="large-white">Hotel</p>
                <p class="small">Jayakarta - Jakarta</p>
                <p class="large-yellow">Jakarta</p>
              </div>
            </div>
            <img src="{{ asset('assets/img/3.png') }}" class="tophotel_img" style="width:100%;"/>
            <div class="col-xs-12 detail">
                <div class="col-xs-6 no-padding text-left">
                  <p class="price"><sup>Rp</sup> 300<sub>/mlm</sub></p>
                </div>
                <div class="col-xs-6 no-padding text-right">
                  <a href="#" class="btn btn-primary">Book Now</a>
                </div>
            </div>
          </div><!--/.col-->
          <?php
            $i++;
            }
          ?>
        </div><!--/.row-->
      </div><!-- container Top hotel -->

      <!-- Banner -->
      <div class="banner" style="background-image:url({{asset('assets/img/promopolos.png')}}); background-size:cover; no-repeat center">
        <div class="container ">
          <div class="col-xs-12">
            <div class="banner-content">
              <div class="caption">
                <h1>Vakanesia</h1>
                <h2>Get Your Trip With Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                <a href="#" class="btn btn-primary">Read Now</a>
              </div>
            </div>
          </div>
        </div>
      </div> <!--/.end Banner -->



      <!-- Popular destination -->
      <div class="container popular">

        <div class="title">
          <div class="col-sm-6">
            <span class="title-blue">Popular</span> <span class="title-gray">Destination</span>
          </div>
          <div class="col-sm-6 link">
            <a href="#">We Recomended</a>
          </div>
        </div>

        <div class="clearfix"></div>
        <hr>
        <div class="content">
          <?php
          $i=1;
          while ($i <= 4) {
          ?>
          <div class="col-xs-12 col-sm-3 col-md-3 item">
            <div class="overlay_popular">
              <div class="overlay_pupular_content">
                <p class="small">Pantai Kuta</p>
                <p class="large">Bali</p>
              </div>
            </div>
            <img src="{{asset('assets/img/4.png')}}" class="popular_img" style="width:100%;"/>
            <div class="col-xs-12 detail">
                <div class="col-xs-10 no-padding"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                <div class="col-xs-2 no-padding"><a href="#"><i class="fa fa-arrow-circle-o-right"></i></a></div>
            </div>
          </div><!--/.col-->
          <?php
            $i++;
            }
          ?>
        </div><!--/.row-->
      </div><!-- container Popular destination -->



</div> <!--content-->


<script>
$(document).ready(function() {
  tophotel();
  popular();
});

$(window).resize(function() {
  tophotel();
  popular();
});

function tophotel() {
  var tophotel_img_w = $('.tophotel_img').width();
  var tophotel_img_h = $('.tophotel_img').height();
  $('.overlay_tophotel').width(tophotel_img_w);
  $('.overlay_tophotel').height(tophotel_img_h);
}
function popular() {
  var popular_img_w = $('.popular_img').width();
  var popular_img_h = $('.popular_img').height();
  $('.overlay_popular').width(popular_img_w);
  $('.overlay_popular').height(popular_img_h);
}

</script>

@endsection
