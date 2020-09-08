<div class="item item-document">
	@if (Auth::check())
    <a href="{{ action('DocumentController@edit', $document) }}" title="{{ __('Edit') }}" class="btn btn-default pull-right">Edit</a>
	@endif
	<h3><a href="{{ action('DocumentController@show', $document) }}" title="{{ __('Show Document') }}">{{ $document->name }}</a></h3>
	<p class="code">{{ $document->code }}</p>
	<p class="website">{{ $document->website }}</p>
	<p class="description">{{ $document->description }}</p>
</div>
