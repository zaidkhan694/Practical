<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hubballi&family=Lora&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Z.K.Poduction</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg.jpg" class="d-block w-100 " alt="forest">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg.jpg" class="d-block w-100" alt="lake">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg.jpg" class="d-block w-100" alt="sky">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section>
    <div class="my-5 w-100">
        <h3 class="text-center">About Us</h3>
    </div>
<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/img4.jpg.jpg" alt="" class="img-fluid aboutImg pb-2">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
            <h3 class="display-3">I am Zaidkhan</h3>
            <p class="py-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, fugiat odio magni qui illum labore aliquam fuga, repellat eum, molestias laboriosam! Nostrum harum distinctio rerum itaque nobis libero nesciunt, fugiat, quidem quis odio nulla sequi doloribus veniam accusamus quo molestiae similique maxime delectus vitae ipsum! Eligendi, temporibus? Eum, modi laboriosam!</p>
            <a href="about.php" class="btn btn-success">Check More</a>
        </div> 
    </div>
</div>
</section>

<section>
<div class="my-5 w-100">
        <h3 class="text-center">Our Services</h3>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12" >
            <div class="card" >
  <img src="images/img2.jpg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Explore Space</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Explore</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12" >
            <div class="card">
  <img src="images/img2.jpg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Explore Space</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Explore</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12" >
  <div class="card">
  <img src="images/img2.jpg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Explore More With us</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-success">Explore</a>
  </div>
</div>
</div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="my-5 w-100">
        <h3 class="text-center">Our Gallery</h3>
    </div>  
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/img3.jpg.jpg" alt="" class="img-fluid pd-2 my-2">
            </div>
        </div>
    </div>
</section>
<section>
<div class="my-5 w-100">
        <h3 class="text-center">Contact Us</h3>
    </div> 
    <form class="w-50 m-auto" action="userInfo.php" method="post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="mobile" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Comment</label>
    <textarea class="form-control" name="comment" id="" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</section>

<footer class="my-5">
    <p class="text-center p-3 bg-dark text-white ">@Z.K.Production</p>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>