@extends('layout')

@section("title")
View Student
@endsection

@section('content')
<a href="{{Route('user.index')}}" class="btn mb-2 btn-primary">Back</a>
  <table class="table table-bodered table-striped">
      <tr>
        <th>ID</th>
        <td>:</td>
        <td> {{$students->id}} </td>
      </tr>
      <tr>
        <th>Name</th>
        <td>:</td>
        <td>{{$students->name}}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>:</td>
        <td>{{$students->email}}</td>
      </tr>
      <tr>
        <th>Age</th>
        <td>:</td>
        <td>{{$students->age}}</td>
      </tr>
      <tr>
        <th>City</th>
        <td>:</td>
        <td>{{$students->city}}</td>
      </tr>
  </table>
@endsection