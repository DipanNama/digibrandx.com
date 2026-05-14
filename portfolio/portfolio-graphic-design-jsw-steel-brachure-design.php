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
            <li class="breadcrumb-item"><a href="../portfolio/portfolio-graphic-design.php">Graphic Design</a></li>
            <li class="breadcrumb-item active" aria-current="page">JSW Steel</li>
          </ol>
        </nav>
        <div class="col-lg-12">
          <p>At our creative agency, we designed a powerful, visually striking <strong>brochure for JSW Steel</strong>,
            one of India&rsquo;s leading steel-making brands. Combining bold industrial aesthetics with clean, modern
            layouts, the brochure showcases JSW Steel&rsquo;s innovation, sustainability, and manufacturing excellence.
            From high-quality product visuals to clear, data-driven infographics, every element is crafted to reflect
            the brand&rsquo;s strength and forward-thinking approach. Tailored for investors, clients, and stakeholders,
            the design enhances brand credibility and impact. With strategic content placement and premium design, this
            brochure positions <strong>JSW Steel </strong>as a global leader in the steel industry.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="port-img-sec"><img class="img-fluid fullscreen" src="upload/media/Mockup_Cover_01.jpg" alt=""
      width="1920" height="1536" /></section>
  <section class="port-img-sec"><img class="img-fluid fullscreen" src="upload/media/Mockup_Inside_01.jpg" alt=""
      width="1920" height="1280" /></section>
  <?php include '../components/contact-form.php'; ?>
  <?php include '../components/instagram.php'; ?>
  <?php include '../components/footer-services.php'; ?>
  

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
