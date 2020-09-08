@extends('layouts.app')

@section('content')

@include('partials.info', [
  'title' => __('Add A Document'), 
	'info' => __('An email or other document')
])

<div class="container py-5 col-4">
  <div id="form-create" class="panel panel-default">
    @include('document/partial-edit')
  </div>
</div>

@endsection
