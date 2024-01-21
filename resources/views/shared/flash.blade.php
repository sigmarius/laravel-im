@if(session()->has('message'))
    <div class="alert alert-info" role="alert">
        {{ session('message') }}
    </div>
@endif
