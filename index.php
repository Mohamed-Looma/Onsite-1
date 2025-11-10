<?php
include("./inc/header.php");
?>
<?php include 'inc/data.php'; ?>

<style>
   body {
    background-image: url('./imgs/pexels-guiirossi-2553425.jpg');
    background-size: cover;        /* Fill the whole screen */
    background-position: center;   /* Center the image */
    background-repeat: no-repeat;  /* Prevent tiling */
    min-height: 100vh;             /* Full viewport height */
  }
</style>

<!-- header -->
<header>
<h1 class="text-center bg-dark  bg-opacity-50 p-5" style="color: aliceblue;" ><b>School Library</b></h1>
</header>

<!-- Carousel Section -->
 
<section class="my-4">
  <div class="container my-4">
    <div id="carouselExampleCaptions" class="carousel slide shadow rounded overflow-hidden mx-auto" style="max-width: 1500px;">
      
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo $slider[0]; ?>" class="d-block w-100" alt="..." style="height: 450px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>Book Collection</h5>
            <p>we have a huge  collection of books</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo $slider[1]; ?>" class="d-block w-100" alt="..." style="height: 450px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>Library Seats</h5>
            <p> you can take a book from our library and sit with your friends and read it</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo $slider[2]; ?>" class="d-block w-100" alt="..." style="height: 450px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
            <h5>huge library</h5>
            <p>you will sit in quite big library</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
  </div>
</section>
<hr>

<!-- cards -->
<section>
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <!-- card 1 -->
     <?php foreach ($books as $id=> $book) : ?>
    <div class="col">
      
      <div class="card h-100 bg-dark ">
        <img src="<?php echo $book['img']; ?>" class="card-img-top" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-white"><?php echo $book['title']; ?></h5>
          <p class="card-text text-white"><?php echo $book['desc']; ?></p>
          <a href="details.php?id=<?php echo $id; ?>" class="btn btn-primary">Learn More</a>
        </div>
        <div class="card-footer">
          <small class="text-white">Last updated 1 day ago</small>
        </div>
      </div>

    
    </div>
      <?php endforeach; ?>
 
  </div>
</section>







<!-- Footer -->
<?php
include("./inc/footer.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
