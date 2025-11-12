<div class="header sticky-top">
  <nav class="navbar navbar-expand-md navbar-light no-padding-navbar">
    <a class="navbar-brand d-flex align-items-center no-left-margin" href="index.php">
      <img src="img/logo.png" alt="StayNest Logo" class="logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
      <ul class="navbar-nav">
        <?php
        if (!isset($_SESSION["user_id"])) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
              <i class="fas fa-user"></i> Signup
            </a>
          </li>
          <div class="nav-vl"></div>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
              <i class="fas fa-sign-in-alt"></i> Login
            </a>
          </li>
        <?php
        } else {
        ?>
          <div class='nav-name'>
            Hi, <?php echo $_SESSION["full_name"] ?>
          </div>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-user"></i> Dashboard
            </a>
          </li>
          <div class="nav-vl"></div>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </nav>
</div>

<div id="loading"></div>

<!-- ✅ FULL CSS BELOW -->
<style>
/* ===========================================================
   STAYNEST NAVBAR AND LOGO - FINAL STYLING
   =========================================================== */

/* Remove Bootstrap’s default navbar padding */
.no-padding-navbar {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

/* Make brand flush to left */
.no-left-margin {
  margin-left: 0 !important;
}

/* Navbar container */
.header .navbar {
  height: 60px;                      /* fixed height */
  background-color: #ffffff;         /* clean white background */
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.06);
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1000;
  position: relative;
}

/* Navbar brand (logo holder) */
.header .navbar .navbar-brand {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  height: 60px;
  padding: 0 10px;
  margin: 0;
  overflow: visible;
}

/* ======================================
   LOGO: CROPPED + LARGER DISPLAY
   ====================================== */
.header .navbar .logo {
  display: block;
  height: 64px !important;          /* visually larger than navbar height */
  width: auto !important;
  object-fit: contain;
  margin-left: 0;
  margin-top: 0;
  /* visually crop white padding inside logo */
  clip-path: inset(10% 6% 10% 6%); /* top right bottom left crop – tweak if needed */
  -webkit-clip-path: inset(10% 6% 10% 6%);
  z-index: 2000;
  transition: transform 0.2s ease;
}

/* Hover zoom for nice visual feel */
.header .navbar .logo:hover {
  transform: scale(1.05);
}

/* Prevent Bootstrap overrides that shrink image */
.header .navbar .navbar-brand img.logo {
  height: 64px !important;
  width: auto !important;
  max-height: 64px !important;
}

/* ======================================
   NAVIGATION LINKS
   ====================================== */
.header .navbar .navbar-nav .nav-link {
  display: flex;
  align-items: center;
  height: 60px;
  font-size: 16px;
  font-weight: 500;
  color: #333 !important;
  padding: 0 10px;
  transition: color 0.2s ease;
}

.header .navbar .navbar-nav .nav-link:hover {
  color: #007bff !important;
}

/* Vertical divider line between nav items */
.nav-vl {
  width: 1px;
  background: rgba(0, 0, 0, 0.08);
  margin: 14px 10px;
  height: 36px;
  align-self: center;
}

/* Name display (“Hi, User”) */
.nav-name {
  display: flex;
  align-items: center;
  font-weight: 600;
  color: #333;
  margin-right: 12px;
}

/* Make sure nothing hides the logo */
.header {
  position: relative !important;
  z-index: 1500;
}

/* ======================================
   RESPONSIVE (MOBILE VIEW)
   ====================================== */
@media (max-width: 767.98px) {
  .header .navbar {
    height: 56px;
  }

  .header .navbar .navbar-brand {
    height: 56px;
    padding-left: 8px;
  }

  .header .navbar .logo {
    height: 48px !important;
    clip-path: inset(12% 8% 12% 8%);
  }

  .header .navbar .navbar-nav .nav-link {
    height: auto;
    padding: 8px 0;
  }

  .nav-vl {
    display: none;
  }
}

/* keep z-index high so the logo always appears */
.header .navbar .navbar-brand,
.header .navbar .logo {
  position: relative;
  z-index: 2000;
}
</style>
