@if (session('message'))
<div class="alert-messages">
  <div class="container col-4">
    <div class="alert alert-{{ session('status') !== null ? session('status') : 'info' }}">
      {{ session('message') }}
    </div>
  </div>
</div>
@endif
