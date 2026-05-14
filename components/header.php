<body>
    <header class="header_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" data-link-key="home" href="<?php echo $base_path; ?>index.php"><img
                                data-content-key="site_info.logo" src="<?php echo $base_path; ?>images/logo.png" width="100" height="50"
                                alt="BS Digital Solution" class="img-fluid"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon">
                                <div id="toggle" class="">
                                    <div class="one"></div>
                                    <div class="two"></div>
                                    <div class="three"></div>
                                </div>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav nav-links">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" data-link-key="home"
                                        href="<?php echo $base_path; ?>index.php">Home</a>
                                </li>
                                <li class="nav-item has-drop " id="deskSrvLi">
                                    <a class="nav-link" href="javascript:void(0)">Services <i
                                            class="fa-solid fa-chevron-down caret"></i></a>
                                    <div class="drop-panel" id="deskDropPanel">
                                        <div class="drop-inner">
                                            <h4 data-content-key="header.services_title">Our Services For Your Brand
                                            </h4>
                                            <div class="srow ">
                                                <a data-link-key="strategy" href="<?php echo $base_path; ?>services/services-branding.php"
                                                    style="padding:0px; margin:0px; text-decoration:none;">
                                                    <div class="srow-head">
                                                        <span class="srow-name">Growth & Business Strategy</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="srow ">
                                                <a data-link-key="social_media" href="<?php echo $base_path; ?>services/services-social-media-branding.php"
                                                    style="padding:0px; margin:0px; text-decoration:none;">
                                                    <div class="srow-head">
                                                        <span class="srow-name">Social Media & Advertising</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="srow ">
                                                <a data-link-key="app_dev" href="<?php echo $base_path; ?>services/services-application-development.php"
                                                    style="padding:0px; margin:0px; text-decoration:none;">
                                                    <div class="srow-head">
                                                        <span class="srow-name">Web & App Development</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="srow ">
                                                <a data-link-key="digital_marketing" href="<?php echo $base_path; ?>services/services-digital-marketing.php"
                                                    style="padding:0px; margin:0px; text-decoration:none;">
                                                    <div class="srow-head">
                                                        <span class="srow-name">Search & Visibility</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="srow ">
                                                <a data-link-key="graphic_design" href="<?php echo $base_path; ?>services/services-graphics-design.php"
                                                    style="padding:0px; margin:0px; text-decoration:none;">
                                                    <div class="srow-head">
                                                        <span class="srow-name">Creative & Content Production</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link " data-link-key="portfolio"
                                        href="<?php echo $base_path; ?>portfolio.php">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link " data-link-key="pricing"
                                        href="<?php echo $base_path; ?>plans-and-pricing.php">Pricing</a></li>
                                <li class="nav-item"><a class="nav-link " data-link-key="case_study"
                                        href="<?php echo $base_path; ?>case-study.php">Case Study</a></li>
                                <li class="nav-item"><a class="nav-link " data-link-key="team"
                                        href="<?php echo $base_path; ?>team.php">Team</a></li>
                                <li class="nav-item"><a class="nav-link " data-link-key="about"
                                        href="<?php echo $base_path; ?>about.php">About</a></li>
                                <li class="nav-item"><a class="nav-link " data-link-key="blogs"
                                        href="<?php echo $base_path; ?>blogs.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link " data-link-key="contact"
                                        href="<?php echo $base_path; ?>contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const srvLink = document.querySelector('#deskSrvLi > a');
            const srvLi = document.getElementById('deskSrvLi');

            if (srvLink) {
                srvLink.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991) {
                        e.preventDefault();
                        e.stopPropagation();
                        srvLi.classList.toggle('open');
                        
                        // Rotate caret icon
                        const caret = this.querySelector('.caret');
                        if (caret) {
                            caret.style.transform = srvLi.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0deg)';
                        }
                    }
                });
            }

            // Sub-item toggle (if any)
            document.querySelectorAll('.drop-panel .srow-head').forEach(head => {
                head.addEventListener('click', function(e) {
                    if (window.innerWidth <= 991) {
                        const row = this.closest('.srow');
                        // Only prevent default if there are sub-links to show (accordion style)
                        // If it's just a direct link, let it navigate
                        const subLinks = row.querySelector('.srow-list');
                        if (subLinks) {
                            e.preventDefault();
                            const wasOpen = row.classList.contains('open');
                            document.querySelectorAll('.drop-panel .srow').forEach(r => {
                                r.classList.remove('open');
                            });
                            if (!wasOpen) {
                                row.classList.add('open');
                            }
                        }
                    }
                });
            });
        });
    </script>
