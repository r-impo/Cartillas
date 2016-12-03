
@section('navbar')
<nav class="navbar navbar-default">
    <div class="container" id="pageTop_anchor">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span>    dóndeDuele</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="faq" href="/faq"><span class=""></span> Preguntas</a></li>
                <li><a id="contact" href="/"><span class=""></span> Contacto</a></li>
              @if (Auth::guest())
                <li><a id="login" href="/login">Acceso Profesionales <span class="glyphicon glyphicon-log-in"></span></a></li>
                <li><a id="register" href="/register">Registrarse <span class="glyphicon glyphicon-user"></span></a></li>
              @else
                <li><a id="menu" href="/admin-menu">Ajustes <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="/logout">Salir <span class="glyphicon glyphicon-log-out"></span></a></li>
              @endif
            </ul>
        </div>
    </div>
</nav>
@endsection
