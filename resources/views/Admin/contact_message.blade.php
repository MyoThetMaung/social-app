@extends('Layouts.adminlayout')
@section('content')

<h1 class="mt-3">Contact message</h1>
<table class="table table-hover">
    <thead class="yellow">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Myo Thet Maung</td>
        <td>saimon@gmail.com</td>
        <td>Can I order chocolate?</td>
        <td><button class="btn btn-sm green white-text">Update</button></td>
        <td><button class="btn btn-sm red white-text">Delete</button></td>
      </tr>
    </tbody>
  </table>  
@endsection