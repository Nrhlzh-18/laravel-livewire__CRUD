<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card body">
                    <form wire:submit.prevent="registerUser">
                        <div class="m-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="emailHelp" wire:model.defer="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="m-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model.defer="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="m-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model.defer="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="m-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" class="form-control" id="password_confirmation" wire:model.defer="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary m-3">Daftar</button>
                        <a href="{{ route('login') }}">Mempunyai akun? </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
