@extends('dashboard.layouts.main')

@section('container')


<header class="masthead">
    <div class="container col-md-4">
        <div class="row align-items-center justify-content-center text-center">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center text-white font-weight-bold">Account</h1>
                <form action="/register" method="post">
                    @csrf
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control rouded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Update</button>
                </form>
              </main>
        </div>
    </div>
</header>

@endsection
