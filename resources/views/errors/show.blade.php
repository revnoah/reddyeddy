@extends('layouts.app')

@section('content')

    @include('partials.info', [
        'title' => __('Sorry'), 
        'info' => __('There was a problem')
    ])

    <div class="container py-5">
        <h2>{{ isset($errorMessage) ? $errorMessage : __('Sorry') }}</h2>
        <p>{{ __('You do not have access. If you believe this is an error, contact your team leader.') }}</p>
    </div>

@endsection
