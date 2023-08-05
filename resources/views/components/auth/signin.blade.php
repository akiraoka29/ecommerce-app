<div class="row">
    <div class="col-md-4 center-page">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sign In</h5>
                <h6 class="card-subtitle mb-2 text-muted">Masuk untuk melakukan transaksi</h6>
                @if(Session::has('fail'))
                <x-alert.alert class="alert-danger" message="{{ Session::get('fail') }}" />
                @endif
                <x-form.signin />
            </div>
        </div>
    </div>
</div>