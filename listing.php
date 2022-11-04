<?php include('includes/head.php') ?>
<?php include('includes/header.php') ?>

  <!-- Hero Banner -->
  <section class="hero__banner__section">
    <div class="container">
      <div class="hero__banner">
        <h3 class="font-gilroy-bold mb-3 fs-1">Urdu Articals</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listing</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <!-- Featured Articals -->
  <?php include('includes/featured-articals.php') ?>
  
  <section class="post__listing__section">
    <div class="container">
      <div class="row g-5">
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
        <?php include('includes/listing-post.php') ?>
      </div>
      <div class="pagination__container d-flex justify-content-md-between my-5 pt-3">
        <ul class="pagination pagination-lg">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
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





