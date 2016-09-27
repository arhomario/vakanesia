@extends('APP')
@section('content')
<style>

.popular{
  /*border-bottom: 1px solid #ccc;*/
  margin-top: 25px;
  margin-bottom: 25px;
}
.popular .title-blue{
  color: #0C72A6;
  font-size: 30px;
}
.popular .title-gray{
  color: #ccc;
  font-size: 30px;
}
.popular .title a{
  color:#0C72A6;
  font-size: 16px;
  margin-top: 10px;
}
@media (min-width:768px) {
  .popular .title a{
    float: right;
  }
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
}
.popular .overlay_popular .overlay_pupular_content .large{
  color: #cdda3e;
  font-size: 40px;
}

</style>
<title>Vakanesia</title>
<div id="content" >


  <div class="home-slider-search">
    <div class="slider">
      <header id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner" style="">
          <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="bg"  style="background-image:url({{asset('assets/img/bg1.png')}}); background-size:cover; background-repeat:no-repeat; background-position:center;" ></div>

            <div class="carousel-caption" style="">
            </div>
          </div>
          <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="bg" style="background-image:url({{asset('assets/img/bg2.png')}}); background-size:cover; background-repeat:no-repeat; background-position:center;" ></div>
            <script>
            var h=$(window).height();
            $(".bg").css("height",h);
            </script>
            <div class="carousel-caption" style="">
            </div>
          </div>

        </div>

        <!-- Controls
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="icon-next"></span>
    </a>-->
  </header>
</div>

<div class="col-sm-12 nav-set search" style="position:absolute; bottom :1%; width:100%; z-index:100;">

  <div class="col-sm-8 nav-set col-sm-offset-2 form-group no-padding" style="text-align:center">
    <form class="form-horizontal caritrip" action="" method="post">
      <div>
        <div class="col-sm-7 form-group">
          <input id="search" type="text" class="form-control" placeholder="Cari Trip (ex. Lombok, Bromo, Gunung, Snorkeling)" name="name" required>
        </div>

        <div class="col-sm-2 form-group">
          <input type="text" style="box-shadow:none;" class="form-control" placeholder="Kapan Saja" data-provide="datepicker" name="fromDate" required>
        </div>

        <div class="col-sm-2 form-group">
          <select id="selcate" name="reward" class="form-control">
            <option value="murah">pengembaraan</option>
            <option value="murah">murah</option>
            <option value="lumayan">lumayan</option>
            <option value="mahal">mahal</option>
            <option value="murah">uang papa akan habis</option>
          </select>
        </div>

        <div class="col-sm-1 form-group">
          <button type="submit" class="btn btn-primary"><span class="icon ion-search" aria-hidden="true"></span></button>
        </div>
      </div>

    </form>
  </div>
</div>
</div>

<div class="col-md-12 no-padding top-mar">
  <div class="col-md-10 col-sm-offset-1 no-padding promotrip">
    <div class="title">
      <span class="blue">Promo</span> <span class="gray">Trip</span><hr>
    </div>

    <div class="item-list">
      <div class="col-md-4 item">
        <div class="item-image"><img src="{{asset('assets/img/1.png')}}" style="width:100%;"/></div>

        <div class="col-md-12 item-desc3 no-padding" >
          <div class="col-xs-6 item" style="color:gray;">
            <a class="title">Trip to <br> Bali 3D2N</a><p class="title-desc">Jakarta(CGK) ke Jogja(JOG)<br> starts from</p>
          </div>
          <div class="col-md-6 item" style="padding:15px 0px 15px 0px;">
            <p class="title-price" style="color:yellowgreen;"><span style="vertical-align:90%; font-size:20px;">Rp </span><span style="font-size:50px;">600</span><span style="vertical-align:90%;font-size:20px;">000</span></p>
          </div>
        </div>

      </div>


      <div class="col-md-4 item">
        <div class="item-image"><img src="{{asset('assets/img/2.png')}}" style="width:100%;"/></div>
        <div class="col-md-12 item-desc3 no-padding">
          <div class="col-xs-6 item" style=" color:gray;">
            <a class="title">Trip to <br> Bali 3D2N</a><p class="title-desc">Jakarta(CGK) ke Jogja(JOG)<br> starts from</p>
          </div>
          <div class="col-md-6 item" style="padding:15px 0px 15px 0px;">
            <p class="title-price" style="color:yellowgreen;"><span style="vertical-align:90%; font-size:20px;">Rp </span><span style="font-size:50px;">600</span><span style="vertical-align:90%;font-size:20px;">000</span></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 item">
        <div class="item-image"><img src="{{asset('assets/img/1.png')}}" style="width:100%;"/></div>
        <div class="col-md-12 item-desc3 no-padding">
          <div class="col-xs-6 item" style="padding-right:0px; color:gray;">
            <a class="title">Trip to <br> Bali 3D2N</a><p class="title-desc">Jakarta(CGK) ke Jogja(JOG)<br> starts from</p>
          </div>
          <div class="col-md-6 item" style="padding:15px 0px 15px 0px;">
            <p class="title-price" style="color:yellowgreen;"><span style="vertical-align:90%; font-size:20px;">Rp </span><span style="font-size:50px;">600</span><span style="vertical-align:90%;font-size:20px;">000</span></p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col-md-10 col-sm-offset-1 tophotel no-padding top-mar">
    <div class="col-md-12 no-padding">
      <div class="title col-md-6 no-padding">
        <span class="blue">Top</span> <span class="gray">Hotel</span>
      </div>
      <div class="title-desc col-md-6" style="text-align: right; padding-top:20px">
        <p style="font-size:70%;"><a>Recommended</a> / <a>Best Seller</a></p>
      </div>
    </div>
    <div class="clearfix"></div>
    <hr>
      <div class="item-list">
        <div class="col-xs-12 col-md-3 item">

          <div class="col-xs-12 item-image" style="padding:0px;">
            <div class="image-caption-to" style=""><h1>Hotel</h1>Jayakarta - Kuta<br><h2>Bali</h2></div>
            <img src="{{asset('assets/img/3.png')}}" style="width:100%;"/></div>
            <div class="col-xs-12 item-desc4" style="padding:0px;">
              <div class="col-xs-6 item" style="padding-right:0px;padding-bottom:0px;">
                <p class="title-price"><span style="vertical-align:75%;font-size:15px;">Rp </span><span style="font-size:25px;">600</span>
                  <span style="vertical-align:sub; font-size:15px;"> /Mlm</span></p>
                </div>
            <div class="col-xs-6 item" style="text-align:center;">
              <button type="submit" class="btn btn-primary" style="border-radius:0">Book Now</button>
            </div>
          </div>
          </div>
          <div class="col-xs-12 col-md-3 item">

            <div class="col-xs-12 item-image" style="padding:0px;">
              <div class="image-caption-to" style=""><h1>Hotel</h1>Jayakarta - Kuta<br><h2>Bali</h2></div>
              <img src="{{asset('assets/img/3.png')}}" style="width:100%;"/></div>
              <div class="col-xs-12 item-desc4" style="padding:0px;">
                <div class="col-xs-6 item" style="padding-right:0px;padding-bottom:0px;">
                  <p class="title-price"><span style="vertical-align:75%;font-size:15px;">Rp </span><span style="font-size:25px;">600</span>
                    <span style="vertical-align:sub; font-size:15px;"> /Mlm</span></p>
                  </div>
              <div class="col-xs-6 item" style="text-align:center;">
                <button type="submit" class="btn btn-primary" style="border-radius:0">Book Now</button>
              </div>
            </div>
            </div>
            <div class="col-xs-12 col-md-3 item">

              <div class="col-xs-12 item-image" style="padding:0px;">
                <div class="image-caption-to" style=""><h1>Hotel</h1>Jayakarta - Kuta<br><h2>Bali</h2></div>
                <img src="{{asset('assets/img/3.png')}}" style="width:100%;"/></div>
                <div class="col-xs-12 item-desc4" style="padding:0px;">
                  <div class="col-xs-6 item" style="padding-right:0px;padding-bottom:0px;">
                    <p class="title-price"><span style="vertical-align:75%;font-size:15px;">Rp </span><span style="font-size:25px;">600</span>
                      <span style="vertical-align:sub; font-size:15px;"> /Mlm</span></p>
                    </div>
                <div class="col-xs-6 item" style="text-align:center;">
                  <button type="submit" class="btn btn-primary" style="border-radius:0">Book Now</button>
                </div>
              </div>
              </div>
              <div class="col-xs-12 col-md-3 item">

                <div class="col-xs-12 item-image" style="padding:0px;">
                  <div class="image-caption-to" style=""><h1>Hotel</h1>Jayakarta - Kuta<br><h2>Bali</h2></div>
                  <img src="{{asset('assets/img/3.png')}}" style="width:100%;"/></div>
                  <div class="col-xs-12 item-desc4" style="padding:0px;">
                    <div class="col-xs-6 item" style="padding-right:0px;padding-bottom:0px;">
                      <p class="title-price"><span style="vertical-align:75%;font-size:15px;">Rp </span><span style="font-size:25px;">600</span>
                        <span style="vertical-align:sub; font-size:15px;"> /Mlm</span></p>
                      </div>
                  <div class="col-xs-6 item" style="text-align:center;">
                    <button type="submit" class="btn btn-primary" style="border-radius:0">Book Now</button>
                  </div>
                </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xs-12 promo-banner" style="padding:15px 0 15px 0;">
            <div class="image-caption-promo">
              <h1>Vakanesia</h1>
              <h2>Get Your Trip With Us</h2>
              <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</span><br>
              <span>Lorem ipsum dolor sit amet, consectetur </span><br><p>
              <button type="submit" class="btn btn-primary" style="border-radius:0px;"><span >Read Now</span></button>
            </div>
            <div class="promo"  style="background-image:url({{asset('assets/img/promopolos.png')}}); background-size:cover; background-repeat:no-repeat; background-position:center; height:380px;" ></div>
          </div>


      <!-- Popular destination -->
      <div class="container popular">
        <div class="title">
          <div class="col-sm-6">
            <span class="title-blue">Popular</span> <span class="title-gray">Destination</span>
          </div>
          <div class="col-sm-6">
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

          <div class="col-xs-12 col-sm-4 col-md-3 item">
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
$(document).ready(function functionName() {
  resize_popular();
});

$(window).resize(function functionName() {
  resize_popular();
});

function resize_popular() {
  var popular_img_w = $('.popular_img').width();
  var popular_img_h = $('.popular_img').height();
  $('.overlay_popular').width(popular_img_w);
  $('.overlay_popular').height(popular_img_h);
}

</script>

@endsection
