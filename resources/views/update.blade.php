@extends('layout')

@section("title")
Update Student
@endsection

@section('content')
<a href="{{Route('user.index')}}" class="btn mb-2 btn-primary">Back</a>
 <form action="{{Route('user.update',$students->id)}}" method="POST">
  @csrf
  @method("PUT")
  <input type="text" name="username" value="{{$students->name}}" class="form-control mb-3">
  <input type="email" name="email" value="{{$students->email}}" class="form-control mb-3">
  <input type="number" name="age" value="{{$students->age}}" class="form-control mb-3">
  <input type="text" name="city" value="{{$students->city}}" class="form-control  mb-3">
  <button type="submit" class="btn bg-warning">Update</button>
 </form>
@endsection