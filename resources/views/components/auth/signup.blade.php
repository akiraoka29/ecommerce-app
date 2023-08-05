<div class="row">
    <div class="col-md-4 center-page">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sign Up</h5>
                <h6 class="card-subtitle mb-2 text-muted">Daftar untuk membuat akun baru</h6>
                @if(Session::has('alert'))
                <x-alert.alert class="alert-danger" message="{{ Session::get('alert') }}" />
                @endif
                <x-form.signup />
            </div>
        </div>
    </div>
</div>