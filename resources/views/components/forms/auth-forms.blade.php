<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ $action }}">
                        @csrf
                        {{ $slot }}

                        {{ $rememberMe }}

                        {{ $actions }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
