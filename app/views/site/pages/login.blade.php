@extends('site.layouts.default')
@section('content')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Please Login</h3>
                  </div>
                  <div class="panel-body">
                    @if(Session::get('errors'))
	                  <div class="alert alert-danger alert-dismissable">
	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                    <h5>Terjadi Kesalahan saat mencoba untuk login:</h5>
	                    @foreach($errors->all('<li>:message</li>') as $message)
	                      {{$message}}
	                    @endforeach
	                  </div>
	                @endif
                        <form role="form">

                              <div class="form-group">
                                    <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
                              </div>

                              <div class="form-group">
                                    <input type="password" name="password" class="form-control input-sm" placeholder="Password">
                              </div>

                              <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Ingat Saya
                                        <a href="/forgot" class="pull-right">Lupa Password?</a>
                                    </label>
                              </div>
                          <input type="submit" value="Login" class="btn btn-info btn-block">

                        </form>
                  </div>
            </div>
            <div class="text-center">
              <a href="/register" >Anda belum memiliki akun ? Daftar</a>
              <p><a href="/" >Kembali</a></p>
            </div>
  </div>
</div>
@stop