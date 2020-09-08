@extends('layouts.app')

@section('content')

@include('partials.info', [
  'title' => __('Edit Document'), 
	'info' => __('Edit the document')
])

<div class="container py-5 col-4">
  <div id="form-create" class="panel panel-default">
    @include('document/partial-edit')
    @include('document/partial-delete')
  </div>
</div>

@endsection
