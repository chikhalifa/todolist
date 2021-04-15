<!DOCTYPE html>

<head>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Todo List/title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

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
kkkkkkkkk

</body>

</html>
hhhhhhhh

