@extends('layouts.master')

@include('includes.header')
@include('includes.scripts')
@include('includes.navbar')

@section('content')
  <div class="modal-body" style="padding:40px 50px;">
  <h4 id="faqTitleModal"><span class=""></span> Preguntas Frecuentes</h4>
      <div class="panel-group" id="colapsador">
          <div class="panel panel-default align_glyph">
              <i class="fa fa-comments glyph_icon"></i>
              <div class="panel-heading">
                  <div class="panel-title">
                      <a class="faqItems faqTitle" href="#collapse1" data-toggle="collapse" data-parent="#colapsador">
                          Pregunta 1
                      </a>
                  </div>
                  <div class="panel-collapse collapse" id="collapse1">
                      <div class="panel-body faqItems faqBody">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                      </div>
                  </div>
              </div>
          </div>
          <div class="panel panel-default align_glyph">
              <i class="fa fa-comments glyph_icon"></i>
              <div class="panel-heading">
                  <div class="panel-title">
                      <a class="faqItems faqTitle" href="#collapse2" data-toggle="collapse" data-parent="#colapsador">
                          Pregunta 2
                      </a>
                  </div>
                  <div class="panel-collapse collapse" id="collapse2">
                      <div class="panel-body faqItems faqBody">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                      </div>
                  </div>
              </div>
          </div>
          <div class="panel panel-default align_glyph">
              <i class="fa fa-comments glyph_icon"></i>
              <div class="panel-heading">
                  <div class="panel-title">
                      <a class="faqItems faqTitle" href="#collapse3" data-toggle="collapse" data-parent="#colapsador">
                          Pregunta 3
                      </a>
                  </div>
                  <div class="panel-collapse collapse" id="collapse3">
                      <div class="panel-body faqItems faqBody">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                      </div>
                  </div>
              </div>
          </div>
          <div class="panel panel-default align_glyph">
              <i class="fa fa-comments glyph_icon"></i>
              <div class="panel-heading">
                  <div class="panel-title">
                      <a class="faqItems faqTitle" href="#collapse4" data-toggle="collapse" data-parent="#colapsador">
                          Pregunta 4
                      </a>
                  </div>
                  <div class="panel-collapse collapse" id="collapse4">
                      <div class="panel-body faqItems faqBody">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                      </div>
                  </div>
              </div>
          </div>
          <div class="panel panel-default align_glyph">
              <i class="fa fa-comments glyph_icon"></i>
              <div class="panel-heading">
                  <div class="panel-title">
                      <a class="faqItems faqTitle" href="#collapse5" data-toggle="collapse" data-parent="#colapsador">
                          Pregunta 5
                      </a>
                  </div>
                  <div class="panel-collapse collapse" id="collapse5">
                      <div class="panel-body faqItems faqBody">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@include('includes.footer')
