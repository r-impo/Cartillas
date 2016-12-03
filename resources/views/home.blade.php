@extends('layouts.master')

@include('includes.header')
@include('includes.navbar')

@section('content')
  <div class="homepage-hero-module">
        <div class="video-container">
            <div class="filter"></div>
            <video autoplay loop class="fillWidth">
                <source src="img/Walk-The-Dog.mp4" type="video/mp4">
            </video>
            <section class="section-home" id="section_anchor">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center home-titulo ">Buscá tu Médico</h1>
                        </div>
                        <div class="col-md-12">
                            <form class="form-inline text-center">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="form-group form-elementos">
                                            <select class="form-control form-elementos">
                                                <option hidden>Privado o por Pregaga </option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="form-group form-elementos">
                                            <select class="form-control form-elementos">
                                                <option hidden>Especialista</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div class="form-group form-elementos">
                                            <input type="text" class="form-control form-elementos search-query" id="exampleInputEmail2" placeholder="Ingresá Zona, Ciudad o Provincia">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-2">
                                        <div class="form-elementos">
                                            <button type="submit" class="btn btn-warning form-elementos">Buscar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="poster hidden">
                <img src="img/Walk-The-Dog.jpg" alt="">
            </div>
        </div>
    </div>
@endsection

@include('includes.footer')


@include('includes.scripts')
