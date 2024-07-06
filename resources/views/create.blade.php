@extends('layout')

@section("title")
Create Student
@endsection

@section('content')
<a href="{{Route('user.index')}}" class="btn mb-2 btn-primary">Back</a>
 <form action="{{Route('user.store')}}" method="POST">

  @csrf

  <input type="text" name="username" placeholder="Student Name" class="form-control mb-3">
  <input type="email" name="email" placeholder="Student Email" class="form-control mb-3">
  <input type="number" name="age" placeholder="Student Age" class="form-control mb-3">
  <input type="text" name="city" placeholder="Student city" class="form-control  mb-3">
  <button type="submit" class="btn bg-warning">Create</button>
  <input type="reset" class="btn btn-info" value="Reset">
 </form>
@endsection