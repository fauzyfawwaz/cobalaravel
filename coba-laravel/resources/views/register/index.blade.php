@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    {{-- supaya responsive ketika dikecilkan pakai "col-lg-ukurannya" --}}
    <div class="col-md-5">
        <main class="form-registration">
            <form>
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
              {{-- User Registration --}}
              <form action="/register" method="post"></form>
             {{-- @csrf --}}
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-0 rounded-top" id="name" placeholder = "Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control rounded-0" id="username" placeholder = "Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name= "email" class="form-control rounded-0" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-0 rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
          
              {{-- <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div> --}}
              <button class="btn btn-primary w-100 my-3 py-2" type="submit">Register</button>
              {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> --}}
            </form>
            <small class="d-block text-center">Already Registred? <a href="/login">Login</a></small>
          </main>
    </div>
</div>


@endsection