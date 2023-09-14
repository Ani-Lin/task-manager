<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

   
  </head>

  <body style="background-color:#dbdee0">

    <div class="container-fluid">
        <div class="header-block">
            <span>
                <p class="header-text" style="float:right">Welcome {{Auth::user()->name;}}</p>
                <a class="header-text" style="float:right" href="{{route('logout')}}">Logout</a>
                <a class="header-text" style="float:left" href="{{route('dashboard')}}">Dashboard</a>
            </span>
        </div>
       <div style="margin:10px;">
            <a href="{{route('addTask')}}"><button class="btn btn-sml btn-primary" style="float:right">Add Task</button></a>
       </div>
        <div class="user-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Task Description</th>
                        <th scope="col">User</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($tasks as $task)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->body }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->status }}</td>
                                <td>
                                    <a href="{{ route('edit', ['task_id'=>$task->task_id]) }}"><button class="btn btn-sml btn-primary">Edit</button></a>
                                    <a href="{{ route('destroy', ['task_id'=>$task->task_id]) }}"><button class="btn btn-sml btn-primary">Delete</button></a>
                                </td>                      
                            </tr>
                        @php
                            $i=$i+1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <!-- /container -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>