    @extends('Layouts.authlayout')
    @section('content')
    <div class="container col-md-4 offset-4">

        <!-- Material form register -->
<div class="card mt-5">

    <h5 class="card-header white-text pink text-center py-4">
        <strong>Register Form</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{ route('post_register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="username">
                        @error('username')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror 
                        <label for="materialRegisterFormFirstName">Username</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                @error('email')
                <h6 class="text-danger">{{ $message }}</h6>
            @enderror 
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" name="password" aria-describedby="materialRegisterFormPasswordHelpBlock">
                @error('password')
                <h6 class="text-danger">{{ $message }}</h6>
            @enderror 
                <label for="materialRegisterFormPassword">Password</label>

            </div>
            <!-- File -->
            <div class="md-form">
                <label>Choose Profile Picture:</label> <br><br>
                <input type="file" class="" aria-describedby="materialRegisterFormPasswordHelpBlock" name="image" > <br>
                @error('file')
                <h6 class="text-danger">{{ $message }}</h6>
            @enderror 
            </div>
            
            <!-- Sign up button -->
            <button class="btn btn-outline-pink btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>
             <!-- Already register -->
        
            <a href="{{ route('login') }}" class="hoverable">Already registered?</a>
        

        </form>
    </div>
</div>
    </div>
    @endsection


