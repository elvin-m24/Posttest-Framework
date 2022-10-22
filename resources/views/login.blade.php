<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-title text-center">L O G I N</h1>
        </div>
        <div class="card-text">
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Gagal</b> {{session('error')}}
            </div>
            @endif
            @if(session('username'))
            <div class="alert alert-danger">
                <b>Gagal!</b> {{session('username')}}
            </div>
            @endif                        
          <form action="{{url('/action-login')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <p>Belum Ada Akun? <a href="/register">Sign Up</a></p>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>           
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>