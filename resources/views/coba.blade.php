<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <style>
      .carousel-contain{
        background-color: black;
        color: white;
      }
      
    </style>
</head>
<body>

  <div class="container-fluid carousel-contain py-5">
    <div class="container ">
      <h2 class="text-center mb-5">Our Product</h2>
      <div id="carouselExample" class="carousel slide col-lg-6 offset-lg-3">
        <div class="carousel-inner ">
          <div class="carousel-item active ">
            <div class="card col-lg-10 offset-lg-1" style="width: 100%; ">
              <img src="{{ asset('assets/img/about.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/about.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/about.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

</body>
</html>