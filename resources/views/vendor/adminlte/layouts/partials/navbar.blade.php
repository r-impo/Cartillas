
@section('navbar')

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

@show
