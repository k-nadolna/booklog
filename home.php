<?php
    session_start();
    include('php/config.php');
    if(!isset($_SESSION['user_id'])){
      header ('Location: ./index.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookLog | Home</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-success-subtle shadow-sm">
    <div class="container-fluid">
      <a href="#" class="navbar-brand m-2">
        <i class="bi bi-book-half"></i>
        <span>BookLog</span>
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggle-icon"></span>
      </button>

      <div class="navbar-collapse collapse justify-content-end" id="menu">
        <ul class="navbar-nav">

        <?php
       if(isset($_SESSION['user_id'])){
          $user_id = $_SESSION['user_id'];
          $user_name = $_SESSION['user_name'];
}
        ?>
          <li class="nav-item d-flex align-items-center">
            <p class="fw-bold mb-0">Hello <?= $user_name ?></p>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">Change Profile</a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid d-flex justify-content-center gap-3 p-5">
    <div class="container-fluid d-flex flex-column border border-success-subtle w-25 rounded p-3 shadow">
      <h2 class="border-bottom border-success-subtle w-100 py-2 fs-3">Add Book</h2> 
      <form action="" method="POST">
        <div class="py-2">
          <label for="title" class="form-label">Title</label>
          <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="py-2">
          <label for="author" class="form-label">Author</label>
          <input type="text" id="author" name="author" class="form-control">
        </div>
        <div class="py-2">
          <label for="rating" class="form-label">Rating (0-10)</label>
          <input type="number" id="rating" name="rating" min="0" max="10" step="1" class="form-control">
        </div>
        <div class="py-2">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" rows="4" id="description"></textarea>
        </div>
        <div class="d-flex justify-content-end py-2">
          <input type="submit" class="btn btn-success" name="submit" id="submit" value="Add Book">
        </div>
     
      </form>  
    </div>
     <div class="container-fluid d-flex flex-column border border-success-subtle  w-75 rounded p-3 shadow">
      <h2 class="border-bottom border-success-subtle w-100 py-2 fs-3">Your list:</h2>
      <div class='d-flex flex-wrap gap-1'>
          <div class="col-12 col-sm-5 col-md-3 flex-fill border border-success-subtle rounded p-3">
            <div class="d-flex align-items-center">
              <i class="bi bi-bookmark-fill fs-3 pe-1"></i>
              <h3 class="mb-0">Book's Tittle</h3>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-file-person pe-1"></i><p class="d-inline mb-0 fs-5">Book's Author</p>
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-star pe-1"></i>
                <p class="d-inline mb-0">Ranting</p>
            </div>
             <div class="d-flex align-items-start">
                <i class="bi bi-card-text pe-1"></i>
                <p class="d-inline mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit illum ratione, beatae dolores adipisci ducimus explicabo. Officia veniam natus repellendus dolorem vero quos libero ducimus? Molestiae sequi temporibus doloremque deleniti!</p>
            </div>
          </div>
          
      </div>   
      
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>