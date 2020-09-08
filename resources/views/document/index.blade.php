@extends('layouts.app')

@section('content')

@include('partials.info', [
  'title' => __('Documents'), 
  'info' => __('Documents that have been imported for sharing.'),
  'buttons' => [
    'add' => [
      'url' => action('DocumentController@create'),
      'text' => __('Add Document')
    ]
  ]
])

<div class="bg-dark py-5">
  <div class="container">
    @if($documents->isEmpty())
      @include('partials.empty', [
        'title' => __('There Are No Documents'),
        'info' => __('Start by adding one')      
      ])
    @else
      <div id="form-create" class="panel panel-default">
        @include('document.partial-cardstack')
        <p class="text-light">{{ $documents->count() }} {{ __('Documents') }}</p>
    @endif
  </div>
</div>

@endsection
