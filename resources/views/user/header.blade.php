<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Halaman User</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">News Berita</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('user.index')}}"> Halaman Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('post')}}">Dashboard Berita</a>
              </li>
           
            </ul>
            <div class="d-flex">
              <ul style="margin-right: 20px;"> <!-- Contoh memberikan margin kanan 20px -->
                  <li class="nav-item">
                      <p>{{ auth()->user()->name }}</p>
                  </li>
              </ul>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none; margin-left: 20px;"> 
                  <img src="{{ asset('picture/accounts/' . auth()->user()->gambar) }}" alt="" width="50px" style="border-radius: 50%;">
              </a>
          </div>
          
          </div>
        </div>
      </nav>