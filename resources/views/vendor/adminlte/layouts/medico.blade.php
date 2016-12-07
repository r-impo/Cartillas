<!DOCTYPE html>
<html lang="en">
<head>

  @include('adminlte::layouts.partials.links')

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
  <!-- Fixed navbar -->

    @include('adminlte::layouts.partials.navbar')

    <section id="content" name="contact"></section>
      <div class="headerwrap">
        <div class="container">
          <div class="row centered">
            <div class="col-xs-12">
              <h1>{{ $user[0]->name }}</h1>
            </div>
          </div>
          <div class="row centered">
            <div class="col-md-offset-1 col-md-4">
              <img src="{{ url('/storage') . '/' . $user[0]->avatar . '.jpg' }}" alt="">
            </div>
            <div class="col-md-7">
              <div class="row">
                <div class="col-xs-8">
                  <h4 class="pull-left">Especialidad: {{ $user[0]->especialidad }}</h4>
                </div>
                <div class="col-xs-4">
                  <h4 class="pull-right">aca va el rating</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <p class="pull-left">Experiencia:{{-- $user[0]->experiencia --}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <button class="btn btn-success" type="button" name="telefono" onClick="telefono()">Llamar</button>
                </div>
                <div class="col-xs-6">
                  <button class="btn btn-success" type="button" name="email" onClick="email()">Enviar e-mail</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <section id="contact" name="contact"></section>

    @include('adminlte::layouts.partials.footerWrap')

    <button type="button" id="scroll_up" class="btn btn-warning hidden"><a class="btn" href="#content">Subir</a></button>
</div>

@include('adminlte::layouts.partials.scriptsApp')

<script>
    $('.carousel').carousel({
        interval: 3500
    })
    $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
        $('#scroll_up').removeClass('hidden');
      }
    });

    function telefono() {
      console.log("mostrar telefono");
    }
    function email() {
      console.log("mostrar email");
    }
</script>
</body>
</html>
