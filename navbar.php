<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php">Love Bread 🍰</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'index.php') echo 'active'; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'menu.php') echo 'active'; ?>" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'blog.php') echo 'active'; ?>" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'testimonials.php') echo 'active'; ?>" href="testimonials.php">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($currentPage == 'about.php') echo 'active'; ?>" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
