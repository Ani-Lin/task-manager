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
        <div class="container-login">
                <form action="{{ route('authenticate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="text-center">Login</h4>
                    <input type="text" id="inputEmail" name="email" class="form-control login-box" placeholder="Email address" required autofocus>
                    <span class="text-danger"><?php if (isset($errEmailMessage)) echo $errEmailMessage; ?></span>
                    <input type="password" id="inputPassword" name="password" class="form-control login-box" placeholder="Password" required>
                    <span class="text-danger"><?php if (isset($errPassMessage)) echo $errPassMessage; ?></span>
                    <div class="text-center">
                        <button name="submit" class="btn btn-success btn-block log-btn" type="submit">Login</button>
                    </div>
                    <div style="margin-top: 10px;">
                        <span class="custom">Not a User yet ? <a href="{{ route('register') }}"> Register Here </a></span>
                    </div>
                    <div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
                                <li>{{ $message }}</li>
                            </div>
                        @endif  

                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
                            <li>{{ $message }}</li>
                        </div>
                    @endif
                    </div>
                </form>
            
        </div> <!-- /container -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>