<section class="jumbotron {{ isset($class) ? $class : '' }} text-center">
  <div class="container">
    <h1 class="jumbotron-heading">{{ $title }}</h1>
    @if (isset($subtitle))
      <h3>{{ $subtitle }}</h3>
    @endif
    <p class="lead">{{ $info }}</p>
    @if (isset($website))
      <p class="website url"><a href="{{ $website }}" title="{{ __('Visit Website') }}">{{ $website }}</a></p>
    @endif
    <p>
      @if (isset($buttons))
        @foreach($buttons as $button)
          <a class="btn btn-secondary" href="{{ $button['url'] }}" role="button">{{ $button['text'] }}</a>
        @endforeach
      @endif
      @if(isset($buttons_partial))
        @foreach($buttons_partial as $button)
          @include($button)
        @endforeach
      @endif
    </p>
  </div>
</section>
