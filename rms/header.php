<?php include('config.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RCR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #660000">
  <div class="container">
    <a class="navbar-brand" href="#">
        Royal Cuisine Restraunt
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rms/add_item.php">Add item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rms/menu.php">Item list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sales</a>
        </li>
      </ul>
      <span class="navbar-text ml-auto">
            Welcome, Admin  
        </span>
    </div>
  </div>
</nav>

