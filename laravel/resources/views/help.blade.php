@extends('APP')
@section('content')
<style>
  .head{
    background: #0C72A6;
    height: 355px;
    position: relative;
    text-align: center;
    padding-top: 100px;
    padding-bottom: 50px;
  }
  @media(max-width:768px){
    .head{
      padding-top: 70px;
      height: 330px;
    }
  }
  .head h1{
    font-weight: 700;
    color: #fff;
  }

  .head p{
      font-weight: 700;
      color: #fff;
  }
  .affix {
      top: 55px;

      background: #fff;
  }
  .menu-left li a{
    color: #8F8F8F;
  }

  .menu-left .nav-pills > li a:hover,.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus{
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
  }




  .content{
    margin-top: 15px;
  }
  .searchfor{
    margin-top: 50px;
  }
  .searchfor .form-control{
    width: 100%;
    display: block;
    box-sizing: border-box;
    height: 60px;
    padding-left: 32px;
    /*padding-right: 32px;*/
    border-radius: 3px !important;
    border: none;
    /*position: relative;*/
    background: rgba(255,255,255,.3);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    font-size: 18px;
    color: #fff;
    transition: all .2s ease-out;
    -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
  }
  .searchfor .form-control::-webkit-input-placeholder{
    color: #fff !important;
  }
  .searchfor .btn-secondary{
    padding: 19px 20px;
    color: #0C72A6;
  }

  .menu-left{
    /*padding-top: 25px;*/
  }
  .section{
    padding-top: 10px;
    /*min-height: 500px;*/
  }
  .section .panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
  }
  .section .panel-heading .accordion-toggle.collapsed:after {
      /* symbol for "collapsed" panels */
      content: "\e080";    /* adjust as needed, taken from bootstrap.css */
  }


</style>
<title>Vakanesia | Help</title>
<div class="head">
  <div class="col-sm-8 col-sm-offset-2">
    <h1>Pusat Bantuan Vakanesia</h1>
    <p>Ada yang dapat kami bantu ?</p>
    <div class="col-sm-8 col-sm-offset-2 searchfor">
      <div class="input-group">
       <input type="text" class="form-control" placeholder="Search for...">
       <span class="input-group-btn">
         <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
       </span>
     </div>
   </div>

  </div>
</div>


<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 hidden-xs">
         <nav class=" menu-left" id="myScrollspy">
           <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="310">
             <li class="active"><a href="#section1">Pembayaran & Konfirmasi</a></li>
             <li><a href="#section2">Refund,Pembatalan & Pengubahan</a></li>
             <li><a href="#section3">Info Hotel</a></li>
             <li><a href="#section4">Info Tiket Pesawat</a></li>
             <li><a href="#section5">Hubungi Kami</a></li>
           </ul>
         </nav>
       </div>
       <div class="col-sm-9">
         <?php
         $i = 1;
         while($i < 7 ){
         ?>
         <div id="section<?php echo $i;?>" class="section">
           <p>Konfirmasi Pesanan & Pembayaran</p>
            <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
                   1. Konfirmasi Pesanan
                  </a>
                </h4>
              </div>
              <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    2.Cara Pesan
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    3.Informasi Pembayaran Umum
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>


         </div><!--section-->
         <?php
         $i++;
         }
         ?>


       </div>
     </div>

   </div><!--./col Container-->
  </div><!--./col-->
</div><!--./Content-->

@endsection
