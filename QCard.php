<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar bg-primary" >
    <div class="container-fluid">
      <b><a class="navbar-brand" href="#"> <span class="pe-3">PBW</span>selamat datang, Giraldo Stevanus Nainggolan</a></b>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php"> <b>Home</b> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="DataTabel.php">Daftar Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Informasi Tugas</a>
            </li>
            <button type="button" style="width: 90%;" class="btn btn-danger position-absolute bottom-0"><a href="uts.php" style="text-decoration:none; color:white;">Logout</a></button>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <h1 align="center">WEBSITE PRAKTIKUM</h1>
  <h1 align="center">PEMROGRAMAN BERBASIS WEB</h1>
  <div class="container mt-5">
    <div class="row">
      <div class="col-4">
        <div class="card" style="width: 100%;">
          <img src="work1.jpg" class="card-img-top" alt="..." width="100px">
          <div class="card-body">
            <h5 class="card-title">Book page divider</h5>
            <p>s.id/giraldonainggolan</p>
            <p class="card-text">Book page dividers are the result of my creativity to limit the last page I read so that I can read it in the future.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 100%;">
          <img src="work2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">My personalised book cover</h5>
            <p>s.id/giraldonainggolan</p>
            <p class="card-text">my personalised book cover that comes with leather so it can protect the book from extreme temperatures and is water resistant.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 100%;">
          <img src="work3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Leftover puzzle one</h5>
            <p>s.id/giraldonainggolan</p>
            <p class="card-text">The remaining puzzle is a complementary decoration in my book that was tucked away on holiday.</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>