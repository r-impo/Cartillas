<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>dondeDuele</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/searchTabs.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><b>dondeDuele</b></a>
            </div>
            <div class="navbar-collapse collapse">
              <div class="col-sm-4 col-md-4">
                <div class="navbar-form" role="search">
                  <div class="input-group">
                    <input id="search_input" type="text" class="form-control" placeholder="Buscar" name="q">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div id="medicos-container">
      <div class="col-xs-12">

        <div class="container">
          <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Todos</a></li>
              <li><a data-toggle="tab" href="#menu1">Médicos</a></li>
              <li><a data-toggle="tab" href="#menu2">Centros Médicos</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <div id="todos" class="tab-content current">
                @if ($users)
                    @foreach ($users as $user)
                      <a href="{{ url('/medico') . '/' . $user->id }}" class="search_results">
                        <img class="avatar" src="{{ url('/storage') . '/' . $user->avatar }}" alt="" >
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->especialidad }}</p>
                        <p>{{ $user->direccion }}</p>
                      </a>
                    @endforeach
                @else
                   <p>No se encontraron resultados</p>
                @endif
              </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div id="medicos" class="tab-content">
                @if ($users)
                    @foreach ($users as $user)
                      <article><a href="{{ url('/medico') . '/' . $user->id }}">{{ $user->name }}</a></article>
                    @endforeach
                @else
                   <p>No se encontraron resultados</p>
                @endif
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div id="centro_medico" class="tab-content">
                @if (false)
                    @foreach ($centros as $centro)
                      <article><a href="{{ url('/medico') . '/' . $centro->id }}">{{ $centro->name }}</a></article>
                    @endforeach
                @else
                   <p>No se encontraron resultados</p>
                @endif
             </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="row">
              <div class="col-lg-5">
                  <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                  <p>
                      Av. Monroe 860,<br/>
                      Nuñez,<br/>
                      Buenos Aires<br/>
                      Argentina
                  </p>
              </div>

              <div class="col-lg-7">
                  <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                  <br>
                  <form role="form" action="#" method="post" enctype="plain">
                      <div class="form-group">
                          <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                          <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                      </div>
                      <div class="form-group">
                          <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                          <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                      </div>
                      <div class="form-group">
                          <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                          <textarea class="form-control" name="Message" rows="3"></textarea>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script src="{{ asset('/js/search.js') }}"></script>
<script src="{{ asset('/js/searchTabs.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
