<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>
  <!-- Hero Banner -->
  <section class="hero__banner__section __dark" style="background-image: url('./assets/img/author-banner.jpg');">
    <div class="container">
      <div class="hero__banner">
        <h3 class="font-gilroy-bold mb-3 fs-1">Authors</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Authors</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="author__listing__section">
    <div class="container">
      <div class="author__registration__info [ d-flex gap-5 align-items-center mb-5 ]">
        <div class="__icon">
          <img src="./assets/img/writting-hand.svg" alt="Writting Hand Icon" />
        </div>
        <div class="__content">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quibusdam non possimus repudiandae illum numquam? Dicta eligendi harum ea rerum fuga labore cum voluptatibus corrupti illo, obcaecati
          </p>
          <h3 class="mb-4">
            <strong>Become a member of Al Ehsan Media and write/post your Articles on our platform</strong>
          </h3>
          <a href="javascript:;" class="btn btn-secondary btn-lg [ d-inline-flex align-items-center gap-3 ]">
            Register Now
            <i class="fa-solid fa-long-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="row g-4">
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
        <?php include('includes/author-profile-card.php') ?>
      </div>
      <div class="pagination__container w-100 d-flex justify-content-center my-5 pt-3">
        <ul class="pagination pagination-lg">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
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





