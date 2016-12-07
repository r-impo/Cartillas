<!DOCTYPE html>
<html lang="en">
<head>

  @include('adminlte::layouts.partials.links')

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">

    @include('adminlte::layouts.partials.navbar')

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
                @if (count($users) > 0)
                    @foreach ($users as $user)
                      <article class="row todosMedicos">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2 todosMedicos-1">
                          <img class="avatar" src="{{ url('/storage') . '/' . $user->avatar . '.jpg' }}" alt="" >
                        </div>
                        <div class="col-sm-5 todosMedicos-2">
                          <a href="{{ url('/medico') . '/' . $user->id }}" class="">{{ $user->name }}</a>
                          <p>{{ $user->especialidad }}</p>
                          <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $user->direccion }}</p>
                        </div>
                        <div class="col-sm-3 todosMedicos-3">
                          <a><i class="fa fa-phone" aria-hidden="true"></i>Ver teléfono</a>
                          <a><i class="fa fa-envelope-o" aria-hidden="true"></i>Ver mail</a>
                        </div>
                      </article>
                    @endforeach
                @else
                   <p>No se encontraron resultados</p>
                @endif
              </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div id="medicos" class="tab-content">
                @if (count($users) > 0)
                    @foreach ($users as $user)
                    <article class="row todosMedicos">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-2 todosMedicos-1">
                        <img class="avatar" src="{{ url('/storage') . '/' . $user->avatar . '.jpg' }}" alt="" >
                      </div>
                      <div class="col-sm-5 todosMedicos-2">
                        <a href="{{ url('/medico') . '/' . $user->id }}" class="">{{ $user->name }}</a>
                        <p>{{ $user->especialidad }}</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $user->direccion }}</p>
                      </div>
                      <div class="col-sm-3 todosMedicos-3">
                        <a><i class="fa fa-phone" aria-hidden="true"></i>Ver teléfono</a>
                        <a><i class="fa fa-envelope-o" aria-hidden="true"></i>Ver mail</a>
                      </div>
                    </article>
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

    @include('adminlte::layouts.partials.footerWrap')

</div>

@include('adminlte::layouts.partials.scriptsApp')

<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
