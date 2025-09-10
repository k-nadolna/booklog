<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookLog | Login</title>
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
          <li class="nav-item">
            <a href="index.php" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid d-flex justify-content-center p-5">
    <div class="continer-fluid d-flex flex-column border border-success-subtle rounded p-3 w-50 shadow">
      <h1 class="border-bottom border-success-subtle w-100 py-2">Login</h1>

      <form action="#" method="POST">
        <div class="py-1">
          <label for="email" class="form-label">E-mail</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="py-1">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="password">
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-success my-3" value="Login">
        </div>
      
      </form>
        

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>