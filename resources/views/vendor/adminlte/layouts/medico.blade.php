<!DOCTYPE html>
<html lang="en">
<head>

  @include('adminlte::layouts.partials.links')
  <link rel="stylesheet" href="{{ asset('css/stars.css') }}">
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
                  <h4 class="pull-right"><span class="stars">{{ $user[0]->rating }}</span></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <p class="pull-left">Experiencia: {{ $user[0]->experiencia }}</p>
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
    $(document).ready(function() {
        $('span.stars').stars();
    });

    $('.carousel').carousel({
        interval: 3500
    });

    $.fn.stars = function() {
      return $(this).each(function() {
        $(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
      });
    }
</script>
</body>
</html>
