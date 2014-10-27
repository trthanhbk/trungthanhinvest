@extends('layouts.blank')

@section('content')

<!-- Form area -->
<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget worange">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Login
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <form class="form-horizontal" action="{{ action("UsersController@postSignin") }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token(); }}">
                    <!-- Email -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputUsername">Username</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputPassword">Password</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                      </div>
                    </div>
                        <div class="col-lg-9 col-lg-offset-2">
							<button type="submit" class="btn btn-danger">Sign in</button>
						</div>
                    <br />
                  </form>

				</div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

@stop