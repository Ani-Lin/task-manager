<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Task</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

   
  </head>

  <body style="background-color:#dbdee0">
        <div class="header-block">
            <p class="header-text">Welcome {{Auth::user()->name;}}</p>
            <a href="{{route('dashboard')}}">Dashboard</a>
        </div>
        <div class="container-form">
            
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="row g-3" style="padding:20px;">
                    @csrf
                    <h4 class="text-center">Add Task</h4>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Task Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter task title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Task Description</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Describe the task" name="body" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">User</label>
                        <select class="form-select" name="user">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Status</label>
                        <select id="inputState" class="form-select" name="status">
                            <option value="Assigned" selected>Assigned</option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            
        </div> <!-- /container -->
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>