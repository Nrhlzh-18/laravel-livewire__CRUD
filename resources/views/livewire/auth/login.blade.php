<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card body">
                    <form wire:submit.prevent="loginUser">
                        <div class="m-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model.defer="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="m-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" wire:model.defer="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check m-3">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" wire:model.defer="remember">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary m-3">Login</button>
                        <a href="{{ route('register') }}">Belum punya akun? </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
