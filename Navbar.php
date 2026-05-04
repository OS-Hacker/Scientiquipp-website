<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php')?>
</head>
<body>

    <!-- Custom Navbar -->
    <nav class="custom-navbar">
      <div class="navbar-container">
        <!-- Logo -->
        <a class="navbar-logo" href="#">
          <img
            src="assets/images/Logo.png"
            alt="Logo"
            style="width: 95px; height: 55px;"
          />
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggle" id="navToggle" aria-label="Toggle navigation">
          <span class="hamburger"></span>
          <span class="hamburger"></span>
          <span class="hamburger"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="navbar-menu" id="navbarMenu">
          <!-- Nav Links -->
          <ul class="nav-links">
            <li><a class="nav-link active" href="./">Home</a></li>
            <li><a class="nav-link" href="Configurator.php">Configurator</a></li>
            <li><a class="nav-link" href="#">Service</a></li>
            <li><a class="nav-link" href="#">Support</a></li>
            <li><a class="nav-link" href="#">Academy</a></li>
            <li><a class="nav-link" href="About.php">Company</a></li>
          </ul>

          <!-- Right Actions -->
          <div class="navbar-actions">
            <button class="search-btn">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="contact-btn prime-btn">Contact Us</button>
          </div>
        </div>
      </div>
    </nav>

<?php include('script.php')?>
</body>
</html>