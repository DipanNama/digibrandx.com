<?php
$pageTitle = "Best Creative Portfolio for Branding Agency | BS Digital Solutions";
$pageDescription = "Explore the versatile expertise of BS Digital Solutions in Branding, UI/UX Design, Film Production, and Digital Marketing.";
$pageKeywords = "portfolio, branding, graphics, videos, reels, logos, digital marketing portfolio";
include 'components/head.php';
include 'components/header.php';
?>

<section class="inner_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-4">
        <h1>BS Digital Solutions Portfolio: Creative Excellence, Proven Results.</h1>
        <p>BS Digital Solutions is a creative powerhouse with versatile expertise in <strong>Branding, UI/UX Design,
            Film Production, Social Media Branding, and Digital Marketing</strong>. Our portfolio showcases innovative
          solutions that drive engagement and elevate digital presence across industries.</p>
      </div>
    </div>
  </div>
</section>

<section class="portfolio_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tab">
          <button class="tablinks active" onClick="openCity(event, 'all_show_default','parent_3')">All</button>
          <button class="tablinks" onClick="openCity(event, 'graphics','39')">Graphics</button>
          <button class="tablinks" onClick="openCity(event, 'videos','107')">Videos</button>
          <button class="tablinks" onClick="openCity(event, 'reels','21')">Reels</button>
          <button class="tablinks" onClick="openCity(event, 'logos','22')">Logos</button>
        </div>

        <div id="all_show_default" class="tabcontent" style="display: block;">
          <div class="row">
            <!-- Graphics Items -->
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=600&q=80"
                    alt="Real Estate" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Real Estate & Construction</h5>
                  <p>Impactful visual identities for the modern skyline.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1624727828489-a1e03b79bba8?auto=format&fit=crop&w=600&q=80"
                    alt="Healthcare" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Healthcare & Wellness</h5>
                  <p>Compassionate branding for health and healing.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?auto=format&fit=crop&w=600&q=80"
                    alt="E-Learning" class="img-fluid"></div>
                <div class="port-content">
                  <h5>E-commerce & E-Learning</h5>
                  <p>Digital-first experiences for growth and education.</p>
                </div>
              </div>
            </div>
            <!-- Videos Items -->
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=600&q=80"
                    alt="Corporate Film" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Corporate Brand Films</h5>
                  <p>Cinematic storytelling that defines brand legacy.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1712903276048-6da8d45bd9fa?auto=format&fit=crop&w=600&q=80"
                    alt="Product Film" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Product Showcases</h5>
                  <p>High-impact visuals for your flagship products.</p>
                </div>
              </div>
            </div>
            <!-- Reels Items -->
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=600&q=80"
                    alt="Social Media Reels" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Social Media Reels</h5>
                  <p>Scroll-stopping content for Instagram and TikTok.</p>
                </div>
              </div>
            </div>
            <!-- Logos Items -->
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=600&q=80"
                    alt="Logo Design" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Minimalist Logo Design</h5>
                  <p>Simple, iconic, and unforgettable brand marks.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="graphics" class="tabcontent">
          <div class="row">
            <?php
            $graphicsItems = [
              ["Real Estate & Construction", "https://images.unsplash.com/photo-1560518883-ce09059eeffa"],
              ["Healthcare & Wellness", "https://images.unsplash.com/photo-1624727828489-a1e03b79bba8"],
              ["E-commerce & E-Learning", "https://images.unsplash.com/photo-1501504905252-473c47e087f8"],
              ["E-commerce & Retail", "https://images.unsplash.com/photo-1441986300917-64674bd600d8"],
              ["Hospitality Travel & Tourism", "https://images.unsplash.com/photo-1469854523086-cc02fe5d8800"],
              ["Professional Services", "https://images.unsplash.com/photo-1551434678-e076c223a692"],
              ["Finance & Banking", "https://images.unsplash.com/photo-1501167786227-4cba60f6d58f"],
              ["Beauty & Personal Care", "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9"],
              ["Automotive", "https://images.unsplash.com/photo-1494976388531-d1058494cdd8"],
              ["Local & Home Services", "https://plus.unsplash.com/premium_photo-1661726643889-4d53827eb937"],
              ["Jewelry & Accessories", "https://images.unsplash.com/photo-1515562141207-7a88fb7ce338"],
              ["Fashion & Lifestyle", "https://images.unsplash.com/photo-1483985988355-763728e1935b"],
              ["Events Management", "https://images.unsplash.com/photo-1511578314322-379afb476865"],
              ["Digital Marketing", "https://images.unsplash.com/photo-1460925895917-afdab827c52f"],
              ["Interior Design", "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6"],
              ["Restaurants", "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4"]
            ];
            foreach ($graphicsItems as $item) {
              echo '<div class="col-lg-4">
                  <div class="portfolio-card">
                    <div class="port-img"><img src="' . $item[1] . '?auto=format&fit=crop&w=600&q=80" alt="' . $item[0] . '" class="img-fluid"></div>
                    <div class="port-content">
                      <h5>' . $item[0] . '</h5>
                      <p>Tailored graphic solutions for ' . $item[0] . '.</p>
                    </div>
                  </div>
                </div>';
            }
            ?>
          </div>
        </div>

        <div id="videos" class="tabcontent">
          <div class="row">
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=600&q=80"
                    alt="Corporate Film" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Corporate Brand Films</h5>
                  <p>Cinematic storytelling that defines brand legacy.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1712903276048-6da8d45bd9fa?auto=format&fit=crop&w=600&q=80"
                    alt="Product Film" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Product Showcases</h5>
                  <p>High-impact visuals for your flagship products.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="reels" class="tabcontent">
          <div class="row">
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=600&q=80"
                    alt="Social Media Reels" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Social Media Reels</h5>
                  <p>Scroll-stopping content for Instagram and TikTok.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="logos" class="tabcontent">
          <div class="row">
            <div class="col-lg-4">
              <div class="portfolio-card">
                <div class="port-img"><img
                    src="https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=600&q=80"
                    alt="Logo Design" class="img-fluid"></div>
                <div class="port-content">
                  <h5>Minimalist Logo Design</h5>
                  <p>Simple, iconic, and unforgettable brand marks.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'components/contact-form.php'; ?>
<?php include 'components/instagram.php'; ?>
<?php include 'components/footer-services.php'; ?>

<?php
include 'components/footer.php';
include 'components/scripts.php';
?>