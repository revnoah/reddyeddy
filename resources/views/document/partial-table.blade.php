<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">{{ __('Name') }}</th>
      <th scope="col">{{ __('Code') }}</th>
      <th class="col-created" scope="col">{{ __('Created') }}</th>
      <th class="col-actions" scope="col">{{ __('Actions') }}</th>
    </tr>
  </thead>
  <tbody>
  @foreach($documents as $document)
    <tr>
      <td><a href="{{ action('DocumentController@show', $document) }}" title="{{ __('Show Document') }}">{{ $document->name }}</a></td>
      <td>{{ $document->code }}</td>
      <td>{{ $document->created_at->diffForHumans() }}</td>
      <td>
        <div class="d-flex flex-row">
          <form action="{{ action('DocumentController@show', ['document' => $document]) }}" class="p-1">
            <button type="submit" class="btn btn-secondary btn-sm">{{ __('View') }}</button>
          </form>
          <form action="{{ action('DocumentController@destroy', ['document' => $document]) }}" method="post" class="p-1">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-secondary btn-sm">{{ __('Remove') }}</button>
          </form>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>