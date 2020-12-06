@extends('Layouts.pagelayout')
@section('content')
    <div class="container col-md-6 mt-4 ">
        <h2 class="mb-3">Create Post </h2>
        <!-- Default form login -->
<form class=" border border-light pt-4 pl-5 pr-5" action="{{ route("post") }}" method="post">
    @csrf

    <!-- Title -->  
    <label for="">Title</label>
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-2">

    <!-- Photo -->
    <label for="">Photo</label>
    <input type="file" id="defaultLoginFormPassword" class="form-control mb-2" >

    <!-- Content -->
    <label for="">Content</label>
    <textarea name="" id="" cols="20" rows="10" class="form-control mb-3"></textarea>

    <!-- Create post button -->
    <button class="btn btn-info btn-block my-4" type="submit" id="alert-target">Add Post</button>

</form>
</div>

@endsection