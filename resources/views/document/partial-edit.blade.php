<div id="update-document" class="form-create">
  <form id="document-update" action="{{ $document->id > 0 ? action('DocumentController@update', $document) : action('DocumentController@store') }}" method="post">
    {{ csrf_field() }}

    @if ($document->id > 0)
      {{ method_field('PATCH') }}
    @endif

    <div class="row">
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label for="name">{{ __('Name') }}</label>
        <input type="text" id="name" name="name" value="{{ old('name') !== null ? old('name') : (isset($document->name) ? $document->name : '') }}" class="form-control form-input" placeholder="{{ __('Name') }}" required autofocus />
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label for="caption">{{ __('Document Code') }}</label>
        <input type="text" id="code" name="code" value="{{ old('code') !== null ? old('code') : (isset($document->code) ? $document->code : '') }}" class="form-control form-input" placeholder="{{ __('document Code') }}" />
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <label for="description">{{ __('Description') }}</label>
        <textarea id="description" name="description" class="form-control" rows="3" placeholder="{{ __('Description') }}">{{ old('description') !== null ? old('description') : (isset($document->description) ? $document->description : '') }}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-12 col-sm-12 col-xs-12">
        <button id="update" name="update" class="btn btn-primary">{{ $document->id > 0 ? __('Update') : __('Create') }}</button>
      </div>
    </div>

  </form>
</div>
