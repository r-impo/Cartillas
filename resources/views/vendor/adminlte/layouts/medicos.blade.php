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
    <link rel="stylesheet" href="css/style.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

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

    <section id="search_bar" name="contact"></section>
      <div id="headerwrap">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div id="custom-search-input">
                  <div class="input-group col-md-12">
                      <input id="search_input" type="text" class="form-control input-lg" placeholder="Buscar" />
                      <span class="input-group-btn">
                          <button class="btn btn-info btn-lg" type="button" href="/medicos">
                              <i class="glyphicon glyphicon-search"></i>
                          </button>
                      </span>
                  </div>
              </div>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="row">
          <div id="custom-search-filters">
            <div class="container">
    	         <ul class="tabs">
    		        <li class="tab-link current" data-tab="todos">Todos</li>
    		        <li class="tab-link" data-tab="medicos">Médicos</li>
    		        <li class="tab-link" data-tab="centro_medico">Centros Médicos</li>
    	         </ul>

  	           <div id="todos" class="tab-content current">
                 @if ($users)
                   <ul>
                     @foreach ($users as $user)
                       <li><a href="{{ url('/medico') . '/' . $user->id }}">{{ $user->name }}</a></li>
                     @endforeach
                   </ul>
                 @else
                    <p>No se encontraron resultados</p>
                 @endif
               </div>
  	           <div id="medicos" class="tab-content">
                 @if ($users)
                   <ul>
                     @foreach ($users as $user)
                       <li><a href="{{ url('/medico') . '/' . $user->id }}">{{ $user->name }}</a></li>
                     @endforeach
                   </ul>
                 @else
                    <p>No se encontraron resultados</p>
                 @endif
               </div>
  	           <div id="centro_medico" class="tab-content">
                 @if (false)
                   <ul>
                     @foreach ($centros as $centro)
                       <li><a href="{{ url('/medico') . '/' . $centro->id }}">{{ $centro->name }}</a></li>
                     @endforeach
                   </ul>
                 @else
                    <p>No se encontraron resultados</p>
                 @endif
               </div>
            </div><!-- container -->
          </div>
        </div>
      </div>



      <div class="headerwrap">

      </div>



    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                <p>
                    Av. Greenville 987,<br/>
                    New York,<br/>
                    90873<br/>
                    United States
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
