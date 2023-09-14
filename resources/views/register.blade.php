<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

   
  </head>

  <body class="bkgrnd">

    <div class="container-register">
    
    <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h4 class="text-center">Register</h4>

        <input type="text" id="inputFirstname" name="name" class="form-control login-box" placeholder="Enter Name" required autofocus>
        
        <input type="text" id="inputLastname" name="email" class="form-control login-box" placeholder="Enter Email" required>
        
        <input type="password" id="inputPassword" name="password" class="form-control login-box" placeholder="Enter Password" required>
        <div class="text-center">
            <button class="btn btn-success btn-block log-btn" type="submit">Register</button>
        </div>
        <div style="margin-top: 10px;">
                    <span class="custom">Already a User ? <a href="{{ route('login') }}"> Login Here </a></span>
         </div>
        
      </form>
        
    </div> <!-- /container -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>