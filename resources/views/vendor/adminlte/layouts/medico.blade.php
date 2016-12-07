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
        <div class="container medico-view">

          <div class="row">

            <div class="col-sm-2 medico-img">
              <img class="avatar" src="{{ url('/storage') . '/' . $user[0]->avatar . '.jpg' }}" alt="">
            </div>

            <div class="col-sm-10">

              <div class="row">

                <div class="col-xs-12">
                  <h1 class="medico-name">{{ $user[0]->name }}</h1>
                </div>
                <div class="col-xs-12">
                  <h4 class="pull-left medico-especialidad">Especialidad: {{ $user[0]->especialidad }}</h4>
                </div>
                <div class="col-xs-12">
                  <h4 class="pull-left medico-rating"><span class="stars">{{ $user[0]->rating }}</span></h4>
                </div>
                <div class="col-xs-12">
                  <p class="pull-left medico-experiencia">Experiencia: {{ $user[0]->experiencia }}</p>
                </div>
                <div class="col-xs-12">
                  <a class="medico-telefono" href="tel:{{ $user[0]->telefono }}"><i class="fa fa-phone" aria-hidden="true"></i>Ver teléfono</a>
                  <a class="medico-mail" href="mailto:{{ $user[0]->email }}"><i class="fa fa-envelope-o" aria-hidden="true"></i>Ver mail</a>
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
