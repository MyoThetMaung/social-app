    @extends('Layouts.authlayout')
    @section('content')
<div class="container col-md-4 mt-5">
<!-- Material form login -->
<div class="card">

    <h5 class="card-header pink white-text text-center py-4">
      <strong>Sign in Form</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="#!">
  
        <!-- Email -->
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control">
          <label for="materialLoginFormEmail">E-mail</label>
        </div>
  
        <!-- Password -->
        <div class="md-form">
          <input type="password" id="materialLoginFormPassword" class="form-control">
          <label for="materialLoginFormPassword">Password</label>
        </div>
  
        <div class="d-flex justify-content-around">
          <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
          </div>
        </div>
  
        <!-- Sign in button -->
        <button class="btn btn-outline-pink  btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>
  
        <!-- Register -->
        <p>Not a member?
          <a href="{{ route("register") }} " class="hoverable">Register</a>
        </p>
  
      </form>  
    </div>
  </div>
</div> 
    
    @endsection
