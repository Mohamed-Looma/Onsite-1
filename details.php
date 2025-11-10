<?php
include("./inc/header.php");
?>
<?php include 'inc/data.php'; ?>



<style>
        body {
            background-image: url('./imgs/pexels-jmark-250609.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            color: white;
            backdrop-filter: blur(2px);
        }
        img.book-cover {
            max-width: 100%;
            height: auto;
            max-height: 550px;
            object-fit: cover;
        }
        section{
            margin-bottom: 70px;
            margin-top: 70px;
        }
    </style>
<?php
$id = $_GET['id'] ;
if (!$id ) {
    header("Location: index.php");
    exit;
}
$book = $books[$id];
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= $book['img']; ?>" alt="<?= $book['title']; ?>" class="book-cover">
        </div>
        <div class="col-md-8">
            <h2><?= $book['title']; ?></h2>
            <p><?= $book['desc']; ?></p>
            <a href="index.php" class="btn btn-primary btn-lg">Back to home</a>
        </div>
    </div>
</div>


    <!-- Footer -->
<?php
include("./inc/footer.php");
?>