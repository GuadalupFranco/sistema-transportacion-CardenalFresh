@if(session('estatus'))
    <div class="alert alert-success" role="alert">
        {{ session('estatus')}}
    </div>
@endif
