<div id="update-signup" class="form-create">
  <form id="signup-update" action="{{ action('SignupController@store') }}" method="post">
    {{ csrf_field() }}

    <div class="row">
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label for="email">{{ __('Email Address') }}</label>
        <input type="text" id="email" name="email" value="{{ old('email') !== null ? old('email') : (isset($signup->email) ? $signup->email : '') }}" class="form-control form-input" placeholder="{{ __('Email Address') }}" required autofocus />
        <p class="text-muted">Your email address will only be used to notify you about when the app is availble for use.</p>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <button id="update" name="update" class="btn btn-primary">{{ __('Sign Up') }}</button>
      </div>
    </div>

  </form>
</div>
