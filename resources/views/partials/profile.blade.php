<section class="jumbotron {{ isset($class) ? $class : '' }} text-center">
  <div class="container">
    <svg class="bd-placeholder-img" width="{{ $account->profileWidthHeight }}" height="{{ $account->profileWidthHeight }}" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="{{ $account->name }}"><circle cx="{{ floor($account->profileWidthHeight / 2) }}" cy="{{ floor($account->profileWidthHeight / 2) }}" r="{{ floor($account->profileWidthHeight / 2) }}" fill="{{ $account->getHexFromString($account->name) }}" /></svg>
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
