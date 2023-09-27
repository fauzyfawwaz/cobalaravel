@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
      <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
        <form>
          {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
      
          <div class="form-floating">
            <input type="email" class="form-control rounded-0 rounded-top" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control rounded-0 rounded-bottom" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="form-check text-start">

          </div>
          <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
      </main>

        {{-- <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form> --}}

              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
          
              {{-- <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div> --}}
          
              {{-- <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div> --}}
              {{-- <button class="w-100 btn btn-lg btn-primary my-3" type="submit">Login</button> --}}
              {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> --}}
            </form>
            <small class="d-block text-center mt-2">Not Registred? <a href="/register">Register Now!</a></small>
          </main>
    </div>
</div>


@endsection