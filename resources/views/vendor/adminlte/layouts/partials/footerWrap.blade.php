@section('footerWrap')

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

@show
