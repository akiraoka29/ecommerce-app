<form class="mt-4" method="post" action="{{ route('signin') }}">
    @csrf
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" />
    </div>
    <p>Belum memiliki akun? daftar <a href="{{ route('signup.index') }}">disini</a></p>
    <button type="submit" class="btn btn-primary">Masuk</button>
</form>