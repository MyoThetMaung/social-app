@extends('Layouts.pagelayout')
@section('content')
    <div class="container col-md-6 mt-4 ">
        <h2 class="mb-3">User Profile </h2>
        <!-- Default form login -->
<form class=" border border-light pt-4 pl-5 pr-5" action="#!">

    <!-- Username -->  
    <label for="">Username</label>
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-2">

     <!-- Email -->  
     <label for="">Email</label>
     <input type="email" id="defaultLoginFormEmail" class="form-control mb-2">

    <!-- Photo -->
    <label for="">Photo</label>
    <input type="file" id="defaultLoginFormPassword" class="form-control mb-2" >

    <!-- Old Password -->  
    <label for="">Old Password</label>
    <input type="password" id="defaultLoginFormEmail" class="form-control mb-2">

    <!-- New Password -->  
    <label for="">New Password</label>
    <input type="password" id="defaultLoginFormEmail" class="form-control mb-2">

    <!-- Add Post button -->
    <button class="btn btn-info btn-block my-4" type="submit">Add Post</button>
    

</form>
</div>

@endsection