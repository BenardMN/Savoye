@extends("master")
@section("content")

<form class="row g-3 needs-validation" action="{{ url('/main/checklogin') }}" method="post" novalidate>
  <div class="col-12">
    @csrf
    <label for="yourEmail" class="form-label">Email</label>
    <div class="input-group has-validation">
      <input type="text" name="email" class="form-control" id="yourEmail" required>
      <div class="invalid-feedback">Please enter your email.</div>
    </div>
  </div>
  <div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="yourPassword" required>
    <div class="invalid-feedback">Please enter your password!</div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
      <label class="form-check-label" for="rememberMe"><p class="text-center small">Remember for 30 days&nbsp;&nbsp;&nbsp;<a href="#">Forgot Password</a></p></label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Login</button>
  </div>
  <div class="col-12">
    <p class=" text-center small mb-0">Don't have account? <a href="/register">Sign Up</a></p>
  </div>
</form>
@endsection