<header class="main-header desktop-header">
  <!-- top strip starts -->
  <div class="top-strip-container [ d-flex align-items-center ]">
    <div class="container">
      <div class="top-sub-strip [ d-flex justify-content-end align-items-center gap-x-4 ]">
        <div class="top-logo">
          <a href="./">
            <img src="./assets/img/top-logo.svg" alt="Top Header Logo" />
          </a>
        </div>

        <a href="/donate" class="btn btn-secondary d-flex gap-x-2 align-items-center">
          Donate Now
          <i class="fa-solid fa-circle-dollar-to-slot"></i>
        </a>

        <ul class="menu [ d-flex align-items-center ] ">     
          <li class="menu-item hidden-md">
            <a href="./about.php" class="menu-link">
              <i class="fa-solid fa-circle-question"></i>
              <span>About Us</span>
            </a>
          </li>
          <li class="menu-item hidden-md">
            <a href="./contact.php" class="menu-link">
              <i class="fa-solid fa-envelope"></i>
              <span>Contact Us</span>
            </a>
          </li>
          <li class="menu-item">
            <a href="./authors.php" class="menu-link">
              <i class="fa-solid fa-user-pen"></i>
              <span>Authors</span>
            </a>
          </li>
          <li class="menu-item">
            <a href="./login.php" class="menu-link">
              <i class="fa-solid fa-user"></i>
              <span>Login / Join</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- top strip ends -->

  <!-- top navigation starts -->
  <div class="top-nav-container [ d-flex align-items-center ] ">
    <div class="container">
      <div class="top-nav-sub-container [ d-flex align-items-center justify-content-end gap-x-4 ] ">
        <ul class="menu">
          <li class="menu-item hidden-md hidden-lg hidden-xl">
            <a href="./" class="menu-link">Home</a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">sufi personalities</a>
          </li>
          <li class="menu-item hidden-md">
            <a href="#" class="menu-link">literatures</a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="#" class="menu-link">Categories</a>
            <ul class="sub-menu">
              <li class="menu-item"><a href="./books.php">Books</a></li>
              <li class="menu-item"><a href="./videos.php">Videos</a></li>
              <li class="menu-item"><a href="#">Menu List</a></li>
              <li class="menu-item"><a href="#">Menu List</a></li>
              <li class="menu-item"><a href="#">Menu List</a></li>
              <li class="menu-item"><a href="#">Menu List</a></li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="./listing.php" class="menu-link">
              articles
            </a>
            <ul class="sub-menu">
              <li class="menu-item"><a href="./listing.php">Urdu Articals</a></li>
              <li class="menu-item"><a href="#">Home</a></li>
              <li class="menu-item"><a href="#">Home</a></li>
            </ul>
          </li>
          <li class="menu-item hidden-md hidden-lg">
            <a href="#" class="menu-link">
              sufiyana kalam
            </a>
          </li>
          <li class="menu-item hidden-md hidden-lg hidden-xl">
            <a href="#" class="menu-link">
              news
            </a>
          </li>
          <li class="menu-item hidden-md hidden-lg hidden-xl">
            <a href="./vidoes.php" class="menu-link">videos</a>
          </li>
          <li class="menu-item menu-item-has-children hamburger-menu hidden-xxl">
            <span><i class="fa-solid fa-bars"></i></span>
            </a>
            <ul class="sub-menu">
              <li class="menu-item">
                <a href="./" class="menu-link">Home</a>
              </li>
              <li class="menu-item hidden-xl hidden-lg">
                <a href="#" class="menu-link">literatures</a>
              </li>
              <li class="menu-item hidden-xl">
                <a href="#" class="menu-link">
                  sufiyana kalam
                </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">
                  news
                </a>
              </li>
              <li class="menu-item">
                <a href="./vidoes.php" class="menu-link">videos</a>
              </li>
              <li class="breaker"><hr /></li>              
              <li class="menu-item">
                <a href="#" class="menu-link">Authors</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">About Us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link">Contact Us</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="search-bar-container">
          <div class="search-button">
            <i class="fa-solid fa-search pe-none"></i>
          </div>
          <div class="search-input-container">
            <form action="">
              <i class="fa-solid fa-search"></i>
              <input type="text" placeholder="What are you looking for..." class="form-control" id="search-box" name="search-box" />
              <i class="fa-solid fa-times close"></i>
            </form>
          </div>          
        </div>
      </div>
    </div>
  </div>
  <!-- top navigation ends -->
</header>

<!-- Mobile Menus -->
<header class="mobile-header d-md-none">
  <div class="top-logo">
    <a href="./">
      <img src="./assets/img/top-logo.svg" alt="Top Header Logo" />
    </a>
  </div>
  <div class="mobile-header-ctas d-flex align-items-center">
    <a href="/donate" class="btn btn-secondary d-flex gap-x-2 align-items-center white-space-nowrap">
      Donate Now
    </a>
    <button type="button" class="mobile__hamburger"><i class="pe-none fa-solid fa-bars"></i></button>
  </div>
  <div class="mobile-menus-container" style="display: none;">
    <div class="align-items-center d-flex justify-content-between w-100">
      <a href="./login.php" class="btn btn-secondary d-flex gap-x-2 align-items-center">
        Login/Join
        <i class="fa-solid fa-circle-dollar-to-slot"></i>
      </a>
      <div class="close-button"><i class="pe-none fa-solid fa-times"></i></div>
    </div>
    <ul class="menu mt-3">
      <li class="menu-item">
        <a href="./" class="menu-link">Home</a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link">sufi personalities</a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link">literatures</a>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#" class="menu-link">Categories</a>
        <div class="dropdown-icon"><i class="pe-none fa-solid fa-angle-down"></i></div>
        <ul class="sub-menu">
          <li class="menu-item"><a href="./books.php">Books</a></li>
          <li class="menu-item"><a href="./videos.php">Videos</a></li>
          <li class="menu-item"><a href="#">Menu List</a></li>
          <li class="menu-item"><a href="#">Menu List</a></li>
          <li class="menu-item"><a href="#">Menu List</a></li>
          <li class="menu-item"><a href="#">Menu List</a></li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="./listing.php" class="menu-link">
          articles
        </a>
        <div class="dropdown-icon"><i class="pe-none fa-solid fa-angle-down"></i></div>
        <ul class="sub-menu">
          <li class="menu-item"><a href="./listing.php">Urdu Articals</a></li>
          <li class="menu-item"><a href="#">Home</a></li>
          <li class="menu-item"><a href="#">Home</a></li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link">
          sufiyana kalam
        </a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link">
          news
        </a>
      </li>
      <li class="menu-item">
        <a href="./videos.php" class="menu-link">videos</a>
      </li>
    </ul>
    <ul class="menu mt-3">
      <li class="menu-item">
        <a href="./authors.php" class="menu-link">Authors</a>
      </li>
      <li class="menu-item">
        <a href="./about.php" class="menu-link">About Us</a>
      </li>
      <li class="menu-item">
        <a href="./contact.php" class="menu-link">Contact Us</a>
      </li>
    </ul>
  </div>
</header>
