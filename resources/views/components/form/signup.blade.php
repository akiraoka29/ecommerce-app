<form class="mt-4" method="post" action="{{ route('signup') }}">
    @csrf
    <div class="row">
        <div class="form-group col-md-6 col-12">
            <label>{{ __('auth.first_name') }}<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="first_name" />
        </div>
        <div class="form-group col-md-6 col-12">
            <label>{{ __('auth.last_name') }}</label>
            <input type="text" class="form-control" name="last_name" />
        </div>
    </div>
    <div class="form-group">
        <label>Username<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="username" />
    </div>
    <div class="form-group">
        <label>Email<span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="email" />
    </div>
    <div class="form-group">
        <label>Password<span class="text-danger">*</span></label>
        <input type="password" class="form-control" name="password" />
    </div>
    <p>Sudah memiliki akun? masuk <a href="{{ route('signin.index') }}">disini</a></p>
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>