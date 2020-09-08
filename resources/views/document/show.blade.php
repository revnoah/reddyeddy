@extends('layouts.app')

@section('content')

@include('partials.info', [
  'title' => $document->name, 
	'info' => $document->description,
	'website' => $document->website,
  'buttons' => [
    'document' => [
      'url' => action('DocumentController@edit', $document),
      'text' => __('Edit Document')
    ]
	]
])

@endsection
