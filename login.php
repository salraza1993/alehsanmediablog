<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Al Ehsan Media</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"  />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"  />
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <?php include('includes/header.php') ?>

  <section class="login__section mb-5">
    <div class="container [ d-flex gap-5 flex-column ]">
      <div class="login__form__container">
        <div class="left__block">
          <div class="login__form__cover" style="--cover-bg: url('https://images.unsplash.com/photo-1532012197267-da84d127e765')">
            <img src="./assets/img/top-logo.svg" alt="Logo" class="logo__image" width="60px" />
          </div>
        </div>
        <div class="right__block">
          <form action="" class="login__form__block align-items-start">
            <div class="login__form__content w-100">
              <h1 class="font-gilroy-bold text-primary mb-2">Author Login</h1>
              <p class="fs-5">Enter your credentials to access your account.</p>
            </div>
            <div class="login__form__block__input w-100">
              <label for="email" class="form-label login__form__block__label fs-5">
                Email/Username
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-user"></i>
                <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email/username">
              </div>
            </div>
            <div class="login__form__block__input w-100">
              <label for="password" class="form-label login__form__block__label fs-5">
                Password
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-lock"></i>
                <input type="email" class="form-control form-control-lg" id="password" placeholder="Enter password">
              </div>
            </div>
            <div class="d-flex justify-content-between w-100">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
              </div>
              <a href="javascript:;" class="link-primary">Forgot Password?</a>
            </div>
            <button type="button" class="btn btn-lg btn-secondary d-inline-flex gap-x-2 align-items-center">
              Access My Account
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="author__registration__info [ d-flex gap-5 align-items-center mx-auto ]">
        <div class="__icon">
          <img src="./assets/img/writting-hand.svg" alt="Writting Hand Icon">
        </div>
        <div class="__content">
          <h2 class="fs-1 mb-2 font-gilroy-bold text-primary">Don't have an account?</h2>
          <p class="mb-4 fs-5">
            Become a member of Al Ehsan Media and write/post your Articles on our platform
          </p>
          <a href="javascript:;" class="btn btn-primary btn-lg [ d-inline-flex align-items-center gap-3 ]">
            <i class="fa-solid fa-user-edit"></i>
            Register as an Author
          </a>
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





