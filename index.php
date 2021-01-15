<!DOCTYPE html>
<html>
<head>
  <title>Responsive Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.gooleapis.com/css?family=Josefin+Sans&display=swap">
 </head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MishraTechnical</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
       </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-4">
 <div class="py-4">
   <h2 class="text-center">About Us</h2>
 </div>

<div class="container-fluids">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/4.jpg" class="img-fluid aboutimage">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4"> I am Mishra Technical.</h2>
          <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod
          </p>
          <a href="about.php" class="btn btn-success">Check More</a>
        </div>
      </div>
</div>
</section>

<section class="my-5">
         <div class="py-5">
           <h2 class="text-center">Our Services</h2>
         </div>

        <div class="container-fluid">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
    <img class="card-img-top" src="images/7.jpg" alt="Card image">
                  <div class="card-body">
                  <h4 class="card-title">Beautiful Nature :)</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
    <img class="card-img-top" src="images/8.jpg" alt="Card image">
                  <div class="card-body">
                  <h4 class="card-title">Beautiful Nature :)</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
    <img class="card-img-top" src="images/9.jpg" alt="Card image">
                  <div class="card-body">
                  <h4 class="card-title">Beautiful Nature :)</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
               </div>
            </div>
          </div>
       </div>
 </section>

<section class="my-5">
 <div class="py-5">
   <h2 class="text-center">Gallery</h2>
 </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/10.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/11.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/12.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/13.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/14.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/15.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/16.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/17.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
               <img src="images/18.jpg" class="img-fluid pb-4">
            </div>
          </div>
        </div>
</section>

<section class="my-5">
 <div class="py-5">
   <h2 class="text-center">Contact Us</h2>
 </div>
    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>UserName</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile No.</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" name="comments"> 
          </textarea>
        </div>
        <button type="submit" class="btn-success">Submit</button>
    </form>
    </div>

 </section>

 <footer>
   <p class="p-3 bg-dark text-white text-center">MishratechnicalProduction</p>
  </footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>