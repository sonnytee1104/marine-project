<nav class="navbar" data-navbar="">
          <div class="navbar-top">
            <a href="#" class="logo">
              <img
                src="<?= ROOT_URL; ?>assets/img/logo.svg"
                width="187"
                height="38"
                alt="logo"
              />
            </a>

            <button
              class="nav-togle-btn"
              aria-label="close menu"
              data-nav-toggler
            >
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="#" class="navbar-link active">Home</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link">About</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link">Event</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link">Sea Life</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link">Contact</a>
            </li>
          </ul>

          <div class="header-action">
            <a href="#" class="login-btn">Login</a>

            <a href="#" class="btn btn-primary">Sign Up</a>
          </div>
        </nav>