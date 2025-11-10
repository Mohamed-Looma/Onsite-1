<?php
include("./inc/header.php");
?>
<?php include 'inc/data.php'; ?>
  
  <style>
    body {
      background-image: url('./imgs/slide1.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      color: white;
      backdrop-filter: blur(2px);
    }

    .content-container {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 30px;
      border-radius: 10px;
      margin: 30px auto;
      max-width: 900px;
    }
  </style>
</head>
<body>
  <h1 class="text-center bg-dark bg-opacity-50 p-5 text-white"><b>About the School Library</b></h1>

  <div class="container">
    <div class="content-container">
      <p class="fs-5">
        The school library is a vital part of our educational ecosystem. It serves as a hub of knowledge, discovery, and inspiration for both students and staff. With a diverse collection of books, digital resources, magazines, and research materials, the library supports all areas of the curriculum and fosters a love for reading and lifelong learning.
      </p>

      <p class="fs-5">
        Designed to be a welcoming and inclusive space, the library provides students with a quiet environment for study, group work, and independent exploration. It encourages critical thinking, creativity, and academic growth. Whether you're diving into a novel, researching a historical event, or preparing for an exam, the library offers the tools and support you need.
      </p>

      <p class="fs-5">
        Beyond just books, the library hosts regular literacy programs, reading challenges, and author visits to spark interest in literature. Trained librarians are available to guide students in developing information literacy skills — an essential component in today's digital world. From finding credible sources to using online databases, the library equips learners with the skills to succeed.
      </p>

      <p class="fs-5">
        In essence, the school library is more than just a room full of books. It’s a space for growth, imagination, and discovery. It reflects the values of our school: curiosity, respect for knowledge, and the pursuit of excellence. Every student is encouraged to explore, question, and connect with the world — one page at a time.
      </p>
      <br>
      <p class="fs-5">
        <b>Thank you for visiting our school library!</b>
      </p>
      <a href="./index.php" class="btn btn-primary">back to home</a>
    </div>
  </div>


  <!-- footer -->
  <?php
  include("./inc/footer.php");
  ?>