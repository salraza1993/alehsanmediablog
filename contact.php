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
          <div class="login__form__cover" style="--cover-bg: url('./../img/jamia-arifia-cover.jpg')">
            <img src="./assets/img/top-logo.svg" alt="Logo" class="logo__image" width="75px" />
          </div>
        </div>
        <div class="right__block">
          <form action="" class="login__form__block align-items-start gap-4">
            <div class="login__form__content w-100">
              <h1 class="font-gilroy-light text-dark mb-1">Love to hear from you.</h1>
              <h1 class="fs-1 font-gilroy-bold text-primary">Get in touch</h1>
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
                Message
                <i class="fa-solid fa-star-of-life"></i>
              </label>
              <div class="login__form__block__input__box">
                <i class="fa-solid fa-envelope-open-text"></i>
                <textarea name="address" id="address" class="form-control" cols="10" rows="4" placeholder="Enter full address"></textarea>
              </div>
            </div>
            <button type="button" class="btn btn-lg btn-secondary d-inline-flex gap-x-3 align-items-center">
              Send your query
              <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Full Width Ad -->
  <section class="post-section">
    <div class="container">
      <div class="ad__cont horizontal">
        <a href="javascript:void(0)">
          <i class="fa-solid fa-ad"></i>
          <picture>
            <!-- <source media="(max-width:650px)" srcset="img_pink_flowers.jpg">
            <source media="(max-width:465px)" srcset="img_white_flower.jpg"> -->
            <img src="https://www.famousmuslimastrologer.com/wp-content/themes/blankslate/images/header_inner.jpg" alt="Ad Image">
          </picture>
        </a>
      </div>
    </div>
  </section>

  <!-- Related Articals -->
  <?php include('includes/related-articals.php') ?>  

  <?php include('includes/footer.php') ?>
    
  <script src="./assets/js/custome.js"></script>
</body>
</html>





