@extends("master")
@section("content")

<form class="row g-3 needs-validation" novalidate>
  <div class="col-12">
    @csrf
    <label for="yourName" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control" id="yourName" required>
    <div class="invalid-feedback">Please, enter your name!</div>
  </div>
  <div class="col-12">
    <label for="yourEmail" class="form-label">Your Email</label>
    <input type="email" name="email" class="form-control" id="yourEmail" required>
    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
  </div>
  <div class="col-12">
    <label for="yourUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <input type="text" name="username" class="form-control" id="yourUsername" required>
      <div class="invalid-feedback">Please choose a username.</div>
    </div>
  </div>
  <div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="yourPassword" required>
    <div class="invalid-feedback">Please enter your password!</div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Create Account</button>
  </div>
  <div class="col-12">
    <p class="text-center small mb-0">Already have an account? <a href="/login">Log in</a></p>
  </div>
</form>
@endsection