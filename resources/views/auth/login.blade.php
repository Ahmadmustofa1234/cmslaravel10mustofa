<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{$title}}</title>
  </head>
  <body>
   <div class="row d-flex justify-content-center mt-2">
    <div class="col-lg-6">
        <div class="card-header">
           
            <a href="/" class="badge bg-primary" >Kembali </a>
                
            <h1>Login </h1>

            {{-- halaman --}}
            @if($errors->any())
<div class="alert alert-danger" role="alert">
   <ul>
    @foreach($errors->all() as $item)
        <li>
            {{$item}}
        </li>
    @endforeach
   </ul>
  </div>
@endif

@if(Session::get('success'))
<div class="alert alert-success" role="alert">
   <ul>
    <li>{{Session::get('success')}}</li>
   </ul>
  </div>
@endif
            {{--  --}}

        </div>
        <div class="card-body ">
            <form action="{{route('auth.login')}}" method="POST">
              @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email"   value="{{old('email')}}">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" 
                    name="password">
                  </div>
                  <a href="{{route('register')}}">Belum punya akun??Registrasi di sini</a>
                  <br>
                  <br>
                  <button type="submit" class="btn btn-primary">Login</button>

                </form>
        </div>
    </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>