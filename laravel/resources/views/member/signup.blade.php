@extends('APP')
@section('content')
<style>
  .content{
    margin-top: 80px;
    padding-top:60px;
  }
  .social-login{
    height: 100%;
    padding-left: 15px;
    padding-right: 15px;
  }
  @media(max-width:768px){
    .social-login .social-btn{
      padding-top: 25px;
      padding-bottom: 25px;

    }
  }
  @media(min-width:768px){
    .social-login .social-btn{
      padding-top: 120px;
      padding-bottom: 50px;
    }
  }
  .btn-facebook, .btn-facebook:hover{
    background: #4286c1;
    color: #fff;
    margin-bottom: 15px;
  }
  .btn-google, .btn-google:hover{
    background: #f26039;
    color: #fff;
    margin-bottom: 15px;
  }
  .btn-yahoo, .btn-yahoo:hover{
    background: #754cbf;
    color: #fff;
    margin-bottom: 15px;
  }
  .line-top{
    width: 1px;
    height: 150px;
    display: block;
    border-left: 1px solid #ddd;
    margin: auto;
  }
  .or{
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .line-bottom{
    width: 1px;
    height: 230px;
    display: block;
    border-left: 1px solid #ddd;
    margin: auto;
  }
</style>
<title>Vakanesia | Signup</title>
<div class="content">
  <div class="container">

    <div class="col-sm-3 col-sm-offset-1 social-login">
      <div class="social-btn">
        <a href="https://www.facebook.com" class="btn btn-default btn-facebook btn-block"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Sign in with Facebook</a>
        <a href="https://www.facebook.com" class="btn btn-default btn-google btn-block"><i class="fa fa-google"></i> Sign in with Google</a>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="line-top hidden-xs"></div>
      <p class="help-block text-center or hidden-xs">or</p>
      <div class="line-bottom hidden-xs"></div>
    </div>
    <div class="col-sm-5">


      @if($errors->all())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <?php echo $error."</br>";?>
            @endforeach

        </div>
      @endif

      <form action="{{ url('member/signup')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-user"></i></div>
          <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="{{ old('fullname')}}">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
          <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" value="{{ old('phonenumber')}}">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-at"></i></div>
          <input type="email" class="form-control" placeholder="Email Address"  name="email"  value="{{ old('email')}}">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
          <input type="password" class="form-control" placeholder="Password"  name="password" >
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
          <input type="password" class="form-control" placeholder="Retype Password">
        </div>
      </div>
      <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="gender" value="men" <?php if(old('gender') == "men" ){ echo "checked";} ?> > Pria
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="women" <?php if(old('gender') == "women" ){ echo "checked";} ?>> Wanita
        </label>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
          <input type="text" name="birthofdate" class="form-control date" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="date" value="09-01-2013" >
        </div>
      </div>
      <p class="help-block">By clicking Sign Up, you agree to our <a hredf="#">Terms</a> and that you have read our <a href="#">Data Policy</a>, including our <a href="#">Cookie Use</a>.</p>

      <button type="submit" class="btn btn-success btn-block">Signup</button>
    </form>



    </div>

  </div>

</div>
<script>
$(function(){
    $('.date').combodate();


    $('.day').addClass('form-control');
    $('.month').addClass('form-control');
    $('.year').addClass('form-control');
});
</script>
@endsection
