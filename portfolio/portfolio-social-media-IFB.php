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
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>index.php" data-link-key="home">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>portfolio.php">Portfolio</a></li>
            <li class="breadcrumb-item"><a href="../portfolio/portfolio-social-media.php">Social Media</a></li>
            <li class="breadcrumb-item active" aria-current="page">IFB</li>
          </ol>
        </nav>
        <div class="col-lg-12">
          <p>We&rsquo;re proud to handle the social media presence of <strong>IFB</strong>, a premium home appliance
            brand known for innovation, performance, and elegance. As their digital creative partner, we craft
            <strong>engaging, visually striking social media post designs</strong> that connect with their audience and
            elevate their brand personality. Our content strategy is rooted in storytelling, brand consistency, and user
            engagement&mdash;turning everyday appliances into lifestyle statements.
          </p>
          <p>From sleek product showcases to festive campaigns and customer-focused tips, every post is designed to
            reflect <strong>IFB&rsquo;s premium identity</strong> and inspire action. Whether it&rsquo;s boosting
            awareness, driving traffic, or sparking conversations, we blend design, copy, and strategy to deliver
            powerful results.</p>
          <p>If you&rsquo;re looking for a team that understands branding, design, and what clicks on social,
            we&rsquo;re here to make your brand scroll-stopping. Because great design isn&rsquo;t just
            seen&mdash;it&rsquo;s remembered.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="portfolio-details_sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="port-details-content">
            <h1>Coming Soon...</h1>
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
