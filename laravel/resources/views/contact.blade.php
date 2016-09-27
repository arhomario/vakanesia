@extends('APP')
@section('content')
<style>
  .content{
    margin-top: 80px;
    padding-top:60px;
  }

  .content .address{
    height: 100%;
    padding-left: 15px;
    padding-right: 15px;
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
<title>Vakanesia | Contact</title>
<div class="content">







  <div class="container">


    <div class="col-sm-3 col-sm-offset-1 address">
      <legend><i class="fa fa-globe"></i> Our Office</legend>
      <address>
        <strong>Vakanesia, Inc.</strong><br>
        1355 Market Street, Suite 900<br>
        San Francisco, CA 94103<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>

      <address>
        <strong>Sales</strong><br>
        <a href="mailto:#">sales@vakanesia.com</a>
      </address>
    </div>

    <div class="col-sm-2">
      <div class="line-top hidden-xs"></div>
      <p class="help-block text-center or hidden-xs">or</p>
      <div class="line-bottom hidden-xs"></div>
    </div>
    <div class="col-sm-5">
      <legend><i class="fa fa-hand-o-up"></i> Get in Touch</legend>
      @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
      @endif

      @if($errors->all())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <?php echo $error."</br>";?>
            @endforeach
        </div>
      @endif



      <form action="{{ url('contact')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-user"></i></div>
          <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name')}}">
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
          <input type="text" class="form-control" placeholder="Email Address"  name="email"  value="{{ old('email')}}">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-question-circle"></i></div>
          <input type="text" class="form-control" placeholder="Subject"  name="subject"  value="{{ old('subject')}}">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
          <textarea class="form-control" placeholder="Message" name="message" >{{ old('message')}}</textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-success btn-block">Send</button>
    </form>



    </div>

  </div>

</div>
@endsection
