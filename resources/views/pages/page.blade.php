@extends('pages/layout')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Create User
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('todo.store') }}">
          <div class="form-group">
              @csrf
              <label for="name"> FULL Name</label>
              <input type="text" class="form-control" name="fullname"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Task</label>
              <input type="tel" class="form-control" name="taskname"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
<h1>hi</h1>