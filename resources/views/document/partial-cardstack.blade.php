<div class="row">
    @foreach($projects as $project)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="{{ $project->cardLabelHeight }}" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="{{ $project->name }}"><rect width="100%" height="100%" fill="{{ $project->getHexFromString($project->name) }}"></rect></svg>
            <div class="card-body">
                <h3>{{ $project->name }}</h3>
                <p class="card-text">{{ $project->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <form action="{{ action('ProjectController@show', ['project' => $project]) }}" class="p-1">
                            <button type="submit" class="btn btn-sm btn-outline-secondary">{{ __('View') }}</button>
                        </form>
                        <form action="{{ action('ProjectController@destroy', ['project' => $project]) }}" method="post" class="p-1">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-secondary btn-sm">{{ __('Remove') }}</button>
                        </form>
                    </div>
                    <small class="text-muted">{{ $project->code }}</small>
                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>
