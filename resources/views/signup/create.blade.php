@extends('layouts.app')

@section('content')

@include('partials.info', [
  'title' => __('Still Getting Reddy'), 
	'info' => __('ReddyEddy isn\'t ready. Hold steady, get an email when it\'s ready.')
])

<div class="container py-5 col-4">
  <div id="form-create" class="panel panel-default">
    @if(Session::has('message'))
      <p class="alert alert-{{ Session::get('status') }}">{{ Session::get('message') }}</p>
    @endif

    @include('signup/partial-edit')
  </div>
</div>

@endsection
