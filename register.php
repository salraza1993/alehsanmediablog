<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>

  <section class="login__section mb-5">
    <div class="container [ d-flex gap-5 flex-column ]">
      <div class="login__form__container">
        <div class="left__block">
          <div class="login__form__cover" style="--cover-bg: url('https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg')">
            <img src="./assets/img/top-logo.svg" alt="Logo" class="logo__image" width="75px" />
          </div>
        </div>
        <div class="right__block">
          <form action="" class="login__form__block align-items-start gap-4">
            <div class="login__form__content w-100">
              <h1 class="font-gilroy-bold text-primary mb-3">Register</h1>
              <p class="fs-5">Let's get you all set up so you can verify your personal account and begin setting up your profile.</p>
            </div>
            <div class="login__form__block__input w-100">
              <label for="fullname" class="form-label login__form__block__label fs-5">
                Full Name
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-user"></i>
                <input type="text" class="form-control form-control-lg" id="fullname" placeholder="Enter Full Name" />
              </div>
            </div>
            <div class="login__form__block__input w-100">
              <label for="email" class="form-label login__form__block__label fs-5">
                Email
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email id" />
              </div>
            </div>
            <div class="login__form__block__input w-100">
              <label for="phone" class="form-label login__form__block__label fs-5">
                Phone
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-phone"></i>
                <input type="number" class="form-control form-control-lg" id="phone" placeholder="Enter phone" />
              </div>
            </div>
            <div class="login__form__block__input w-100">
              <label for="designation" class="form-label login__form__block__label fs-5">
                Designation/Profile
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-id-card-clip"></i>
                <input type="text" class="form-control form-control-lg" id="designation" placeholder="Enter designation/profile">
              </div>
            </div>
            <div class="login__form__block__input w-100">
              <label for="designation" class="form-label login__form__block__label fs-5">
                Designation/Profile
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-map-marker-alt"></i>
                <textarea name="address" id="address" class="form-control" cols="10" rows="4" placeholder="Enter full address"></textarea>
              </div>
            </div>
            <button type="button" class="btn btn-lg btn-secondary d-inline-flex gap-x-3 align-items-center">
              Process to create account
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </button>
            <div class="w-100 mt-2">
              <hr class="mt-0" />
              <div class="d-flex gap-3 mt-4">
                Already have an account?
                <a href="./login.php" class="link-primary">Sign In</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Full Width Ad -->
  <?php include('includes/horizontal-ad.php') ?>
  <!-- Related Articals -->
  <?php include('includes/related-articals.php') ?>

  <?php include('includes/footer.php') ?>
    
  <script src="./assets/js/custome.js"></script>
</body>
</html>





