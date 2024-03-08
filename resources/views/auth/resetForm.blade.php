
<div class="container">
    <div class="row py-5 mt-4 align-items-center justify-content-between">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>reset password</h1>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-6 col-lg-6 ml-auto">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="email" name="email" placeholder="Email Address" class="form-control mb-4 bg-white border-left-0 border-md">
                <input type="password" name="password" placeholder="New Password" class="form-control mb-4 bg-white border-left-0 border-md">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mb-4 bg-white border-left-0 border-md">
                <button type="submit" class="btn btn-primary btn-block py-2">Reset Password</button>
            </form>
        </div>
    </div>
</div>

