<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Using a Blade layout</title>

    <!-- Bootstrap CSS served from a CDN -->
    {{--<link href="http://netdna.bootstrapcdn.com/bootswatch/3.3.0/superhero/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.0/superhero/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootswatch.min.css')}}" rel="stylesheet">
    {{--<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">--}}
  </head>

  <body>
    <!-- start: Header -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="navbar-collapse collapse navbar-inverse-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Active</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Dropdown header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
		</div>
    </div>
    <div class="container">
        {{--<div class="page-header">
            <div class="jumbotron">
              <h1>Jumbotron</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <p><a class="btn btn-primary btn-lg">Learn more</a></p>
            </div>
        </div>--}}
        @yield('content')
    </div>
  	<!-- end: Header -->

    <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bootswatch.js')}}"></script>
    {{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">--}}
  </body>
</html>