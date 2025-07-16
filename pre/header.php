  <header id="header" class="header d-flex align-items-center light-background sticky-top">
      <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

          <a href="index" class="logo d-flex align-items-center me-auto me-xl-0">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h1 class="sitename">Naresh</h1>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                <?php
                $current_page = basename($_SERVER['PHP_SELF'], ".php");
                ?>
                <li><a href="index" class="<?= $current_page == 'index' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about" class="<?= $current_page == 'about' ? 'active' : '' ?>">About</a></li>
                <li><a href="resume" class="<?= $current_page == 'resume' ? 'active' : '' ?>">Resume</a></li>
                <li><a href="portfolio" class="<?= $current_page == 'portfolio' ? 'active' : '' ?>">Projects</a></li>
                <!-- <li><a href="services" class="<?= $current_page == 'services' ? 'active' : '' ?>">Services</a></li>
                <li class="dropdown">
                    <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> -->
                <li><a href="contact" class="<?= $current_page == 'contact' ? 'active' : '' ?>">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <div class="header-social-links">
              <a href="https://x.com/NareshK99286475" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://github.com/Naresh00433" target="_blank" class="g   ithub"><i class="bi bi-github"></i></a>
              <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
              <a href="https://linkedin.com/in/naresh-kumar-955b2522b" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

      </div>
  </header>