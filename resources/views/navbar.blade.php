<!DOCTYPE html>
<html lang="en">
<head>
    <h3 style="text-align: center;"class = "bg-success bg-gradient text-light" >Giant Book Supplier</h3>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar  navbar-expand-lg text-light m-0 my-0">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/category/Comedy">Comedy</a></li>
            <li><a class="dropdown-item" href="/category/Action">Action</a></li>
            <li><a class="dropdown-item" href="/category/Horror">Horror</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/publisher">Publishers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('main')
<footer class="bg-success bg-gradient text-light">
    <p>
        Nama : Khalif Prabowo Santoso
</p>
<p>
        NIM  : 2440116403
    </p>
</footer>
</body>
</html>