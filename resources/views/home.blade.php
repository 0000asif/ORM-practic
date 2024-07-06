@extends('layout')

@section("title")
All Students
@endsection

@section('content')

<a href="{{Route('user.create')}}" class="btn mb-2 btn-primary">Add New</a>
<table class="table table-bordered table-striped">
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Age</td>
    <td>City</td>
    <td>View</td>
    <td>Delete</td>
    <td>Update</td>
  </tr>
  @foreach ($students as $student)
    <tr>
      <td> {{$student->id}} </td>
      <td> {{$student->name}} </td>
      <td> {{$student->email}} </td>
      <td> {{$student->age}} </td>
      <td> {{$student->city}} </td>
      <td><a href="{{Route('user.show', $student->id)}}" class="btn btn-primary">View</a></td>
      <td>
        <form action="{{route('user.destroy', $student->id)}}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
      <td><a href="{{Route('user.edit', $student->id)}}" class="btn btn-warning">Update</a></td>
    </tr>
  @endforeach
</table>
@endsection