<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="float-sm-start mb-2">
                <h2><b>{{ $pageName }} | {{ $componentName }}</b></h2>
            </div>
            <div class="float-sm-end mb-2">
                <a href="{{ $route }}" class="btn btn-success btn-sm">Nuevo</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        {{ $table }}
    </div>
</div>
