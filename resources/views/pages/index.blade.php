@extends('pages.layout')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Full Name</td>
          <td>Email</td>
          <td>Task</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usertable as $usetdetail)
        <tr>
            <td>{{$usetdetail->id}}</td>
            <td>{{$usetdetail->fullname}}</td>
            <td>{{$usetdetail->email}}</td>
            <td>{{$usetdetail->taskname}}</td>
            <td class="text-center">
                <a href="{{ route('todo.edit', $usetdetail->id)}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('todo.destroy', $usetdetail->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection