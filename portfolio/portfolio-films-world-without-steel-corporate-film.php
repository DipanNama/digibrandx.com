<?php
$pageTitle = "";
$pageDescription = "";
$pageKeywords = "";
include '../components/head.php';
include '../components/header.php';
?>

  <section class="inner_sec" id="port-inner">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" data-link-key="home">Home</a></li>
            <li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
            <li class="breadcrumb-item"><a href="../portfolio/portfolio-films.php">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">World Without Steel</li>
          </ol>
        </nav>
        <div class="col-lg-12">
          <p><span>Imagine a world stripped of steel &mdash; no towering skyscrapers, no sturdy bridges, no cars, and no
              everyday essentials that shape modern life. In this film by Tata Steel, we explore the stark contrast
              between a life without steel and the transformative power it holds in our daily lives. From the
              infrastructure that connects us to the tools that empower us, steel is the silent hero that drives
              progress and innovation. Witness how this extraordinary metal shapes our world, turning challenges into
              possibilities, and transforming the impossible into reality.</span></p>
        </div>
      </div>
    </div>
  </section>
  <section class="portfolio-details_sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="port-details-content">
            <p><iframe src="https://www.youtube.com/embed/i2IquNJz4rw" width="1200" height="673"
                allowfullscreen="allowfullscreen"></iframe></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include '../components/contact-form.php'; ?>
  <?php include '../components/instagram.php'; ?>
  <?php include '../components/footer-services.php'; ?>
  

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
